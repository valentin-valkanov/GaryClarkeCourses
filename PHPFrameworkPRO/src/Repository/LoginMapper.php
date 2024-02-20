<?php declare(strict_types=1);

namespace App\Repository;

use Doctrine\DBAL\Connection;

class LoginMapper
{
    public function __construct(private Connection $connection)
    {
    }

    public function save(): void
    {

    }

}