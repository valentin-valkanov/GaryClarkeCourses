<?php declare(strict_types=1);

namespace GaryClarke\Framework\Routing;

use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use GaryClarke\Framework\Http\HttpException;
use GaryClarke\Framework\Http\HttpRequestMethodException;
use GaryClarke\Framework\Http\Request;
use Psr\Container\ContainerInterface;
use function FastRoute\simpleDispatcher;


class Router implements RouterInterface
{
    private array $routes;

    public function dispatch(Request $request, ContainerInterface $container): array
    {
        $routeInfo = $this->extractRouteInfo($request);

        [$handler, $vars] = $routeInfo;

        if(is_array($handler)) {
            [$controllerId, $method] = $handler;
            $controller = $container->get($controllerId);
            $handler = [$controller, $method];
        }

        return [$handler, $vars];
    }

    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;

    }

    private function extractRouteInfo(Request $request): array
    {
        //Create a dispatcher. The dispatcher holds all routes.
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {

            foreach ($this->routes as $route) {
                $routeCollector->addRoute(...$route);
            }
        });

        //Dispatch a URI, to obtain the route info for the current request.

        $routeInfo = $dispatcher->dispatch(             //routInfo  = [$status, $handler, $vars]
            $request->getMethod(),
            $request->getPathInfo()
        );

        switch ($routeInfo [0]){
            case Dispatcher::FOUND:
                return [$routeInfo[1], $routeInfo[2]]; //routeHandler, vars
            case Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = implode(', ', $routeInfo[1]);
                $e = new HttpRequestMethodException("The allowed methods are $allowedMethods ");
                $e->setStatusCode(405);
                throw $e;
            default:
                $e = new HttpException('Not found');
                $e->setStatusCode(404);
                throw $e;
        }
    }
}