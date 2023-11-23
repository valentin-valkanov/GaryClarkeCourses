<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

/**
 * @MapedIteratorDemo
 */
class MappedIteratorDemo implements Iterator, Countable
{
    /**
     * @param array $items
     */
    public function __construct(private array $items = [])
    {
    }

    /**
     * Return the current element
     * @link https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     */
    public function current(): mixed
    {
        return current($this->items);
    }

    /**
     * @return void
     */
    public function next(): void
    {
        next($this->items);
    }

    /**
     * @return mixed
     */
    public function key(): mixed
    {
        return key($this->items);
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return key($this->items) !== null;
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        reset($this->items);
    }

    public function count(): int
    {
        return count($this->items);
    }
}

$mappedArray = [
    'name' => 'Gary',
    'location' => 'London, Uk',
    'role' => 'Software Developer'
];

$mappedIteratorDemo = new MappedIteratorDemo($mappedArray);
foreach ($mappedIteratorDemo as $item => $value){
    print "$item: $value" . PHP_EOL;
}

print 'Elements count: ' . count($mappedIteratorDemo) . PHP_EOL;
