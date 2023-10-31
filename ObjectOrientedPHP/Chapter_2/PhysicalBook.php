<?php declare(strict_types=1);
require_once 'Book.php';

/**
 * Class PhysicalBook2
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class PhysicalBook extends Book
{
    /**
     * @var int
     */
    public int $weight;

    public function __construct(string $title, string $author, int $price, int $weight)
    {
       parent::__construct($title, $author, $price);
       $this->setWeight($weight);
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function print(){
        return "Title: {$this->getTitle()}, Author: {$this->getAuthor()}, Weight: {$this->getWeight()}";
    }

}