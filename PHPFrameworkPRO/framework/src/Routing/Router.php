<?php declare(strict_types=1);

namespace GaryClarke\Framework\Routing;

use GaryClarke\Framework\Controller\AbstractController;
use GaryClarke\Framework\Http\Request;
use Psr\Container\ContainerInterface;



class Router implements RouterInterface
{
    private array $routes;

    public function dispatch(Request $request, ContainerInterface $container): array
    {
        $routeHandler = $request->getRouteHandler();
        $routeHandlerArgs = $request->getRouteHandlerArgs();

        if (is_array($routeHandler)) {
            [$controllerId, $method] = $routeHandler;
            $controller = $container->get($controllerId);

            if (is_subclass_of($controller, AbstractController::class)) {
                $controller->setRequest($request);
            }
            $routeHandler = [$controller, $method];
        }

        return [$routeHandler, $routeHandlerArgs];
    }
}