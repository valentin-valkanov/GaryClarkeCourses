<?php
declare(strict_types=1);

class ExternalIterator implements IteratorAggregate
{
    public function __construct(private array $items = [])
    {
    }

    public function getIterator(): Traversable
    {
        print __FUNCTION__ . 'called...' . PHP_EOL;
        return new ArrayIterator($this->items);
    }
}

$mappedArray = [
    'name' => 'Gary',
    'location' => 'London, Uk',
    'role' => 'Software Developer'
];

$externalIterator = new ExternalIterator($mappedArray);

foreach ($externalIterator as $item => $value) {

    print "$item: $value" . PHP_EOL;

}