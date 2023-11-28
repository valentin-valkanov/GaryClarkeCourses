<?php declare(strict_types=1);
require_once 'Book.php';

class DigitalBook extends Book
{
    public int $fileSize;

    public function __construct(string $author, string $title, int $price, int $fileSize = 0)
    {
        parent::__construct($author, $title, $price);
        $this->fileSize = $fileSize;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }
    public function print(){
        return "Title: {$this->getTitle()}, Author: {$this->getAuthor()}, Weight: {$this->getFileSize()}";
    }
}