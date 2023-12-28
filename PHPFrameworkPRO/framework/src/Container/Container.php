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
                throw new ContainerException("service $id could not be found");
            }
            $concrete = $id;
        }
        $this->services[$id] = $concrete;
    }
    public function get(string $id)
    {
        return new $this->services[$id];
    }

    public function has(string $id): bool
    {
        return array_key_exists($id, $this->services);
    }
}