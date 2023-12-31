<?php declare(strict_types=1);


abstract class HtmlBlock
{
    public function __construct(private string $content)
    {
    }

    abstract public static function getOpeningTag():string;
    abstract public static function getClosingTag():string;
    public function __destruct()
    {
        $className = static::class;
        echo $className . ' : __destruct called..' . PHP_EOL;
    }

    public function __toString(): string
    {
        return static::getOpeningTag() . $this->content . static::getClosingTag() . PHP_EOL;
    }
}