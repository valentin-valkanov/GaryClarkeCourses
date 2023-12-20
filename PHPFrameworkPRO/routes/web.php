<?php

use App\controller\HomeController;
use App\controller\PostController;

return [
    ['GET', '/', [HomeController::class, 'index']],
    ['GET', '/posts/{id:\d+}',[PostController::class, 'show'] ]
];