<?php
declare(strict_types=1);

class IterableDemoClass implements Iterator
{
    private array $sizes = ['s', 'm', 'l'];
    private int $index = 0;

    public function current(): mixed
    {
        echo __FUNCTION__ . PHP_EOL;
        return $this->sizes[$this->index];
    }

    public function next(): void
    {
        echo __FUNCTION__ . PHP_EOL;
        $this->index++;
    }

    public function key(): mixed
    {
        echo __FUNCTION__ . PHP_EOL;
        return $this->index;
    }

    public function valid(): bool
    {
        echo __FUNCTION__ . PHP_EOL;
        return isset($this->sizes[$this->index]);
    }

    public function rewind(): void
    {
        echo __FUNCTION__ . PHP_EOL;
        $this->index = 0;
    }

}

$iteratorDemoObject = new IterableDemoClass();


function iterateThings(iterable $iterableObject): void
{
    foreach ($iterableObject as $item => $value) {
        print "$item: $value" .PHP_EOL;
    }
}

iterateThings($iteratorDemoObject);