<?php declare(strict_types=1);


/**
 * Class Book
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
abstract class Book
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @param string $title
     */
    public function __construct(string $title,)
    {
        $this->title = $title;
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
    abstract public function write(): string;
}