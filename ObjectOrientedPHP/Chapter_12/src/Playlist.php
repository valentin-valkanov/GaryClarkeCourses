<?php declare(strict_types=1);

namespace App;

class Playlist implements Playable
{
    private string $name;
    private array $items;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addItem(Playable $item): void
    {
        $this->items[] = $item;
    }

    public function play(): void
    {
        echo 'Playing playlist' . $this->name .PHP_EOL;

        foreach ($this->items as $item){
            $item->play();
        }
    }
}