<?php declare(strict_types=1);
require_once 'Book.php';

class PhysicalBook extends Book
{
    public int $weight;

    public function __construct(string $title, string $author, int $price, int $weight)
    {
       parent::__construct($title, $author, $price);
       $this->setWeight($weight);
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    public function print(){
        return "Title: {$this->getTitle()}, Author: {$this->getAuthor()}, Weight: {$this->getWeight()}";
    }
}