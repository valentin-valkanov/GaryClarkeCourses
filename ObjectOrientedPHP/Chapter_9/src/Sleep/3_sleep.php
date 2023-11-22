<?php
declare(strict_types=1);
namespace App\Sleep;

require_once '../../vendor/autoload.php';

class Manager
{
    public function __construct(public string $name)
    {
    }
}

class Department
{
    public ?Manager $manager;

    public function __construct(public string $name)
    {
    }
    public function __sleep(): array
    {
        return ['name'];
    }

    public function __wakeup(): void
    {
        echo 'Being unserialized... performing extra unserialization tasks...  ' . PHP_EOL;
    }
}

$manager = new Manager('Manager A');

$sales = new Department('sales');
$sales->manager = $manager;


$ser = serialize($sales);

dd(unserialize($ser));