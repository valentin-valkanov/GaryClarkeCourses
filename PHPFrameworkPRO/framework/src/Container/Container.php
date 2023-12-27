<?php declare(strict_types=1);

namespace GaryClarke\Framework\Container;
use GaryClarke\Framework\Tests\DependantClass;
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
        $this->services[$id] = $concrete;
    }
    public function get(string $id)
    {
        return new $this->services[$id];
    }

    public function has(string $id): bool
    {
        // TODO: Implement has() method.
    }
}