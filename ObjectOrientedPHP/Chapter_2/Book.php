<?php
declare(strict_types=1);

class Book
{
    public string $title;
    public string $author;
    public int $price;

    public function __construct(string $title, string $author, int $price,)
    {
        $this->title=$title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getPriceAsCurrency(): string
    {
        return '$' . $this->price / 100;
    }

    public function print(){
        return "Title: {$this->getTitle()}, Author: {$this->getAuthor()}";
    }
}