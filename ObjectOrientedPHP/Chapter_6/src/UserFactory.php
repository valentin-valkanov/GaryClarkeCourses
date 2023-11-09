<?php declare(strict_types=1);

namespace App;


class UserFactory
{
    public static function create(int $id, string $name): User
    {
        return new User($id, $name);
    }

}