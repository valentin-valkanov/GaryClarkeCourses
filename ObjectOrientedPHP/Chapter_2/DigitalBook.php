<?php declare(strict_types=1);
require_once 'Book.php';

/**
 * Class DigitalBook
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class DigitalBook extends Book
{
    /**
     * @var int
     */
    public int $fileSize;

    public function __construct(string $title, string $author, int $price, int $fileSize = 0)
    {
        parent::__construct($title, $author, $price);
        $this->setFileSize($fileSize);
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    /**
     * @param int $fileSize
     */
    public function setFileSize(int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return string
     */
    public function print(){
        return "Title: {$this->getTitle()}, Author: {$this->getAuthor()}, File size: {$this->getFileSize()}";
    }
}