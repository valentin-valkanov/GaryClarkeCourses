<?php declare(strict_types=1);

namespace App\Form\User;

use App\Repository\LoginMapper;

class LoginForm
{
    private string $username;
    private string $password;
    private array $errors = [];

    public function __construct(LoginMapper $loginMapper)
    {
    }

    public function setFields(string $username, string $password): void
    {
        $this->username = $username;
        $this->password = $password;
    }
}