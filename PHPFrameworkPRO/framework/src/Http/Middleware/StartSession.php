<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http\Middleware;
use GaryClarke\Framework\Http\Request;
use GaryClarke\Framework\Http\Response;
use GaryClarke\Framework\Session\SessionInterface;

class StartSession implements MiddleWareInterface
{
    public function __construct(
        private SessionInterface $session,
        private string $apiPrefix = '/api'
    )
    {
    }

    public function process(Request $request, RequestHandlerInterface $requestHandler): Response
    {
        if(!str_starts_with($request->getPathInfo(), $this->apiPrefix)){

            $this->session->start();

            $request->setSession($this->session);
        }




        return $requestHandler->handle($request);
    }
}