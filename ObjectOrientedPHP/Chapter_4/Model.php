<?php declare(strict_types=1);

use JetBrains\PhpStorm\Pure;

abstract class Model
{
    private string $group;

    public function __construct()
    {
        $this->group = static::getGroup();
    }

    public static function create():Model
    {
        return new static();
    }

    public static function getGroup(): string
    {
        return 'default';
    }
}