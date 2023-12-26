<?php declare(strict_types=1);

namespace GaryClarke\Framework\Http;

use GaryClarke\Framework\Routing\Router;

class Kernel
{
    public function __construct(private Router $router)
    {
    }

    public function handle(Request $request): Response
    {
        try{

            [$routHandler, $vars] = $this->router->dispatch($request);

            $response = call_user_func_array($routHandler, $vars);

        } catch (HttpException $exception){

            $response = new Response($exception->getMessage(), $exception->getStatusCode());
        }catch (\Exception $exception){

            $response = new Response($exception->getMessage(), 500);
        }

        return $response;

        }
}
