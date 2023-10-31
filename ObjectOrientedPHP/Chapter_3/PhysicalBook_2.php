<?php declare(strict_types=1);
require_once 'Book.php';

/**
 * Class PhysicalBook2
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class PhysicalBook_2 extends Book
{

    /**
     * @param string $title
     * @param int $weight
     * @throws Exception
     */
    public function __construct(string $title, int $weight = 0)
    {
       parent::__construct($title);
       $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    public function write(): string
    {
        return "Title: {$this->getTitle()}, weight: {$this->weight}";
    }


}