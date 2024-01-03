<?php

namespace GaryClarke\Framework\Routing;

use GaryClarke\Framework\Http\Request;
use League\Container\Container;
use Psr\Container\ContainerInterface;

interface RouterInterface
{
    public function dispatch(Request $request, ContainerInterface $container);

    public function setRoutes(array $routes): void;
}