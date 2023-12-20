<?php declare(strict_types=1);

namespace App\controller;

use GaryClarke\Framework\Http\Response;

/**
 * Class HomeController
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class HomeController
{
    public function index(): Response
    {
        $content = '<h1>Hello World</h1>';
        return new Response($content);
    }
}