<?php

use App\Controller\DashboardController;
use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\PostsController;
use App\Controller\RegistrationController;
use GaryClarke\Framework\Http\Middleware\Authenticate;
use GaryClarke\Framework\Http\Middleware\Dummy;
use GaryClarke\Framework\Http\Response;

return [
    ['GET', '/', [HomeController::class, 'index']],     //[$method, $vars, $handler]
    ['GET', '/posts/{id:\d+}', [PostsController::class, 'show']],
    ['GET', '/posts', [PostsController::class, 'create']],
    ['POST', '/posts', [PostsController::class, 'store']],
    ['GET', '/register', [RegistrationController::class, 'index']],
    ['POST', '/register', [RegistrationController::class, 'register',
        [
            \GaryClarke\Framework\Http\Middleware\Guest::class
        ]
    ]
    ],
    ['GET', '/login', [LoginController::class, 'index',
        [
            \GaryClarke\Framework\Http\Middleware\Guest::class
        ]
    ]
    ],
    ['POST', '/login', [LoginController::class, 'login']],
    ['GET', '/dashboard', [DashboardController::class, 'index',
        [
            Authenticate::class,
            Dummy::class
        ]
    ]
    ],
    ['GET', '/hello/{name:.+}', function(string $name) {
        return new Response("Hello $name");
    }]
];

