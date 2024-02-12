<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http\Middleware;

use GaryClarke\Framework\Http\Request;
use GaryClarke\Framework\Http\Response;

class Success implements MiddleWareInterface
{

    public function process(Request $request, RequestHandlerInterface $requestHandler): Response
    {
        return new Response('OMG it worked!!!', 200);
    }
}