<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http\Middleware;

use GaryClarke\Framework\Http\Request;
use GaryClarke\Framework\Http\Response;

/**
 * Class Authenticate
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Authenticate implements MiddleWareInterface
{
    private bool $authenticated = true;
    public function process(Request $request, RequestHandlerInterface $requestHandler): Response
    {
        if(!$this->authenticated){
            return new Response('Authentication failed', 401);
        }

        return $requestHandler->handle($request);
    }

}