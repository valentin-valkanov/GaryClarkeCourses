<?php declare(strict_types=1);

namespace App\Controller;

use App\Form\User\LoginForm;
use GaryClarke\Framework\Controller\AbstractController;
use GaryClarke\Framework\Http\Response;

class LoginController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('login.html.twig');
    }

    public function login(): Response
    {
        // Attempt to authenticate the user using a security component (bool)
        // create a session for the user

        // If successful, retrieve the user

        // Redirect the user to intended location

    }

}