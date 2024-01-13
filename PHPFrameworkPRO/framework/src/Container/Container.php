<?php declare(strict_types=1);

namespace GaryClarke\Framework\Container;
use GaryClarke\Framework\Tests\DependantClass;
use PHPUnit\Logging\Exception;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class Container
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Container implements ContainerInterface
{
    private array $services = [];

    public function add(string $id, string|object $concrete = null)
    {
        if(null === $concrete){
            if(!class_exists($id)){
                throw new ContainerException("service $id could not be added");
            }
            $concrete = $id;
        }
        $this->services[$id] = $concrete;
    }
    public function get(string $id)
    {
        if(!$this->has($id)) {
            if(!class_exists($id)) {
                throw new ContainerException("service $id could not be resolved");
            }

            $this->add($id);
        }

        $object = $this->resolve($this->services[$id]);
        return $object;
    }

    private function resolve($class): object //$class is services[$id]. It is an object|name of the class
    {
        // 1. Instantiate a Reflection class (dump and check). It reflects $class.
        $reflectionClass = new \ReflectionClass($class);

        // 2. Use Reflection to try to obtain a class constructor
        $constructor = $reflectionClass->getConstructor();

        // 3. If there is no constructor, simply instantiate. It means there is no dependencies
        if(null === $constructor){
            return $reflectionClass->newInstance();
        }
        // 4. Get the constructor parameters
        $constructorParams = $constructor->getParameters();

        // 5. Obtain dependencies
        $classDependencies = $this->resolveClassDependencies($constructorParams);

        // 6. Instantiate with dependencies
        $service = $reflectionClass->newInstanceArgs($classDependencies);

        // 7. Return the object
        return $service;
    }

    private function resolveClassDependencies(array $reflectionParameters): array
    {
        // 1. Initialize empty dependencies array (required by newInstanceArgs)
        $classDependencies = [];

        // 2. Try to locate and instantiate each parameter
        /** @var \ReflectionParameter $parameter */
        foreach ($reflectionParameters as $parameter){

            // Get the parameter's ReflectionNamedType as $serviceType.Obtain the type hint of the parameter
            $serviceType = $parameter->getType();

            // Try to instantiate using $serviceType's name.It is doing it recursively using get method
            $service = $this->get($serviceType->getName());

            // Add the service to the classDependencies array
            $classDependencies[] = $service;
        }
        // 3. Return the classDependencies array
        return $classDependencies;
    }

    public function has(string $id): bool
    {
        return array_key_exists($id, $this->services);
    }
}