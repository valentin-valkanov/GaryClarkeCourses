<?php

use App\controller\HomeController;
use App\controller\PostsController;
use GaryClarke\Framework\Http\Response;

return [
    ['GET', '/', [HomeController::class, 'index']],     //[$method, $vars, $handler]
    ['GET', '/posts/{id:\d+}', [PostsController::class, 'show']],
    ['GET', '/posts', [PostsController::class, 'create']],
    ['GET', '/hello/{name:.+}', function(string $name) {
        return new Response("Hello $name");
    }]
];

