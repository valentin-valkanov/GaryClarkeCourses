<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http;

use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{
    /*
     * The handle() method itself contains the logic for routing using FastRoute and directly handles the request based on the matched route.
     * It dispatches the request, identifies the appropriate handler function based on the URL and HTTP method, and executes that handler to generate a Response.
     */
    public function handle(Request $request): Response
    {
        /*
         * Create a dispatcher and dispatching the request
         * After implementing some logic the dispatcher returns the response.
         */
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {
            $routes = include BASE_PATH . '/routes/web.php';

            foreach ($routes as $route) {
                $routeCollector->addRoute(...$route);
            }
//            $routeCollector->addRoute('GET', '/', function() {          //defining a route (routing), the callable simulates a handler (handling)
//                $content = '<h1>Hello World</h1>';                                      //here in the callback body (handler) should be implemented some logic
//
//                return new Response($content);
//            });
//
//            $routeCollector->addRoute('GET', '/posts/{id:\d+}', function($routeParams) {
//                $content = "<h1>This is Post {$routeParams['id']}</h1>";
//
//                return new Response($content);
//            });
        });

        /*
         * Dispatch a URI, to obtain the route info for the current request.
         */
        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(),
            $request->getPathInfo()

        );

        [$status, [$controller, $method], $vars] = $routeInfo;


        /*
         * Call the handler, provided by the route info, in order to create a Response
         */
        $response = call_user_func_array([new $controller, $method], $vars);

        return $response;
    }
}
