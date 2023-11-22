<?php
declare(strict_types=1);

namespace App;

class User
{
    public function __construct(private string $username, private string $password)
    {
    }

    public function __serialize(): array
    {
        echo 'Serializing user with __serialize' . PHP_EOL;

        return [
            'user' => $this->username,
            'pass' => $this->password
        ];
    }

    public function __unserialize(array $data): void
    {
        echo 'Unserializing user with __unserialize' . PHP_EOL;

        $this->username = $data['user'];
        $this->password = $data['pass'];

        echo 'Doing anything else which is necessary... ' .PHP_EOL;

    }

    public function __sleep(): array
    {
        echo 'Serializing user with __sleep' . PHP_EOL;
        return ['username', 'password'];
    }

    public function __wakeup(): void
    {
        echo 'Unserializing user with __wakeup' . PHP_EOL;
    }
}