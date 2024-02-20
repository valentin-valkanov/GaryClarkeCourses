<?php declare(strict_types=1);

namespace App\Form\User;

class LoginForm
{
    private string $username;
    private string $password;
    private array $errors = [];

    public function __construct()
    {
    }

    public function setFields(string $username, string $password): void
    {
        $this->username = $username;
        $this->password = $password;
    }
}