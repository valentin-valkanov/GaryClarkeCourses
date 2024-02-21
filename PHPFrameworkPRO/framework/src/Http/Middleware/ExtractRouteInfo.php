<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http\Middleware;

use GaryClarke\Framework\Http\Request;
use GaryClarke\Framework\Http\Response;

class ExtractRouteInfo implements MiddleWareInterface
{

    public function process(Request $request, RequestHandlerInterface $requestHandler): Response
    {
        dd($request);
        return $requestHandler->handle($request);
    }
}