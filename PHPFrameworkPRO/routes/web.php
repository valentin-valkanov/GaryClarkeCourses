<?php

use App\Controller\HomeController;
use App\Controller\PostsController;
use GaryClarke\Framework\Http\Response;

return [
    ['GET', '/', [HomeController::class, 'index']],     //[$method, $vars, $handler]
    ['GET', '/posts/{id:\d+}', [PostsController::class, 'show']],
    ['GET', '/posts', [PostsController::class, 'create']],
    ['POST', '/posts', [PostsController::class, 'store']],
    ['GET', '/hello/{name:.+}', function(string $name) {
        return new Response("Hello $name");
    }]
];

