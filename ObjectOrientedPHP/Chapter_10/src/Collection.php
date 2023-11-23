<?php declare(strict_types=1);

namespace App;

use ArrayIterator;
use Exception;
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\TentativeType;
use Traversable;
use function array_key_exists;
use function count;

/**
 * Class Collection
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Collection implements \IteratorAggregate, \Countable, \ArrayAccess
{
    public function __construct(private array $elements= [])
    {
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->elements);
    }

    public function get($key): mixed
    {
        return $this->elements[$key] ?? null;
    }

    public function set($key, $value): void
    {
        $this->elements[$key] = $value;
    }
    Public function add($element): bool
    {
        $this->elements[] = $element;
        return true;
    }

    public function conatinsKey($key): bool
    {
        return $this->elements[$key] || array_key_exists($key, $this->elements) !== null;
    }

    public function offsetExists(mixed $offset): bool
    {
        return $this->conatinsKey($offset);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->get($offset);
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if(isset($offset)){
            $this->add($value);
            return;
        }

        $this->set($offset, $value);
    }

    public function offsetUnset(mixed $offset): void
    {
        $this->remove($offset);
    }

    public function remove($key)
    {
        if(!$this->elements[$key] && !array_key_exists($key, $this->elements) !== null){
            return null;
        }

        $removed = $this->elements[$key];
        unset($this->elements[$key]);

        return $removed;
    }

    public function count(): int
    {
        return count($this->elements);
    }

    public function toArray():array
    {
        return $this->elements;
    }

    public function first():mixed
    {
        return reset($this->elements);

    }

    public function last()
    {
        return end($this->elements);
    }

    public function getValues():array
    {
        return array_values($this->elements);
    }

    public function getKeys():array
    {
        return array_keys($this->elements);
    }

    public function isEmpty():bool
    {
        return empty($this->elements);
    }

    public function clear(): void
    {
        unset($this->elements);
    }






}