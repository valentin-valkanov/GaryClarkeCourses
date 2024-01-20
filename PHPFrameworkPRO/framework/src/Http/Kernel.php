<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http;

use Doctrine\DBAL\Connection;
use GaryClarke\Framework\Dbal\ConnectionFactory;
use GaryClarke\Framework\Routing\Router;
use GaryClarke\Framework\Routing\RouterInterface;
use Psr\Container\ContainerInterface;

class Kernel
{
    private string $appEnv;

    public function __construct(
        private RouterInterface $router,
        private ContainerInterface $container
    )
    {
        $this->appEnv = $this->container->get('APP_ENV');
    }

    public function handle(Request $request): Response
    {
        dd($this->container->get(Connection::class));
        try {
//            dd($this->container->get(Connection::class));

            [$routeHandler, $vars] = $this->router->dispatch($request, $this->container);

            $response = call_user_func_array($routeHandler, $vars);

        } catch (\Exception $exception) {
            $response = $this->createExceptionResponse($exception);
        }

        return $response;
    }

    /**
     * @throws  \Exception $exception
     * @return Response
     */
    private function createExceptionResponse(\Exception $exception):Response
    {
        if(in_array($this->appEnv, ['dev', 'test'])){
            throw $exception;
        }
        if($exception instanceof HttpException){
            return new Response($exception->getMessage(), $exception->getStatusCode());
        }

        return new Response('Server error', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}