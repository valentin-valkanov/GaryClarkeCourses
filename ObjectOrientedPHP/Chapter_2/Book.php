<?php declare(strict_types=1);


/**
 * Class Book
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Book
{
    /**
     * @var string
     */
    public string $title;
    /**
     * @var string
     */
    public string $author;
    /**
     * @var int
     */
    public int $price;


    /**
     * @param string $title
     * @param string $author
     * @param int $price
     */
    public function __construct(
        string $title,
        string $author,
        int $price,
    )
    {
        $this->title=$title;
        $this->author = $author;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getPriceAsCurrency(): string
    {
        return '$' . $this->price / 100;
    }

    /**
     * @return string
     */
    public function print(){
        return "Title: {$this->getTitle()}, Author: {$this->getAuthor()}";
    }
}