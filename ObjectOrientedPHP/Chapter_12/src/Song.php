<?php declare(strict_types=1);

namespace App;

class Song implements Playable
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function play(): void
    {
        echo 'Playing song ' . $this->name . PHP_EOL;
    }
}