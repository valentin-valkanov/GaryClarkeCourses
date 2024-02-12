<?php

namespace GaryClarke\Framework\Http\Middleware;

use GaryClarke\Framework\Http\Request;
use GaryClarke\Framework\Http\Response;

interface MiddleWareInterface
{
    public function process(Request $request, RequestHandlerInterface $requestHandler): Response;
}