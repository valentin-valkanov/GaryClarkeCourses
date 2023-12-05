<?php declare(strict_types=1);

namespace App;

class Video implements Playable
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function play(): void
    {
        echo 'Playing video ' . $this->name . PHP_EOL;
    }
}