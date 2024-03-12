<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http\Middleware;

use GaryClarke\Framework\Authentication\SessionAuthentication;
use GaryClarke\Framework\Http\RedirectResponse;
use GaryClarke\Framework\Http\Request;
use GaryClarke\Framework\Http\Response;
use GaryClarke\Framework\Session\SessionInterface;

class Authenticate implements MiddleWareInterface
{
    public function __construct(private SessionInterface $session)
    {
    }

    private bool $authenticated = true;
    public function process(Request $request, RequestHandlerInterface $requestHandler): Response
    {
        $this->session->start();

        if(!$this->session->has(SessionAuthentication::AUTH_KEY)){
            $this->session->setFlash('error', 'Please sign in');
            return new RedirectResponse('/login');
        }

        return $requestHandler->handle($request);
    }
}