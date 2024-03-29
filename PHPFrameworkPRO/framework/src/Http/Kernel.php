<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http;

use GaryClarke\Framework\EventDispatcher\EventDispatcher;
use GaryClarke\Framework\Http\Event\ResponseEvent;
use GaryClarke\Framework\Http\Middleware\RequestHandlerInterface;
use Psr\Container\ContainerInterface;

class Kernel
{
    private string $appEnv;

    public function __construct(
        private ContainerInterface $container,
        private RequestHandlerInterface $requestHandler,
        private EventDispatcher $eventDispatcher
    )
    {
        $this->appEnv = $this->container->get('APP_ENV');
    }

    public function handle(Request $request): Response
    {
        try {

            $response = $this->requestHandler->handle($request);

        } catch (\Exception $exception) {
            $response = $this->createExceptionResponse($exception);
        }

        $this->eventDispatcher->dispatch(new ResponseEvent($request, $response));
        return $response;
    }

    /**
     * @throws  \Exception $exception
     */
    private function createExceptionResponse(\Exception $exception): Response
    {
        if (in_array($this->appEnv, ['dev', 'test'])) {
            throw $exception;
        }

        if ($exception instanceof HttpException) {
            return new Response($exception->getMessage(), $exception->getStatusCode());
        }

        return new Response('Server error', Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function terminate(Request $request, Response $response)
    {
        $request->getSession()?->clearFlash();
    }
}