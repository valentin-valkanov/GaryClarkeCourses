<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

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
}

$manager = new Manager('Manager A');

$sales = new Department('sales');

$ser = serialize($sales);

dd($ser);