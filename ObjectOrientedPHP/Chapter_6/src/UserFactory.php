<?php declare(strict_types=1);

namespace App;


class UserFactory
{
    public static function create(int $id, string $name): AccountHolder
    {
        return new AccountHolder($id, $name);
    }

}