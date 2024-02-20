<?php declare(strict_types=1);

namespace App\Controller;

use App\Form\User\LoginForm;
use App\Repository\LoginMapper;
use GaryClarke\Framework\Controller\AbstractController;
use GaryClarke\Framework\Http\Response;

class LoginController extends AbstractController
{
    public function __construct(LoginMapper $loginMapper)
    {
    }

    public function index(): Response
    {
        return $this->render('login.html.twig');
    }

    public function login(): Response
    {
        // Create a form model which will:
        // - validate fields
        // - map the fields to User object properties
        // - ultimately save the new User to the DB

        $form = new LoginForm($this->loginMapper);
    }

}