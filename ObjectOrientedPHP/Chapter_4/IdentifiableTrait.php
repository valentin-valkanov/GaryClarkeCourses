<?php

trait IdentifiableTrait
{
    /**
     * @throws Exception
     */
    public function getHexId(): string
    {
        return bin2hex(random_bytes(5));
    }

    /**
     * @throws Exception
     */
    public static function generateHexId(): string
    {
        return bin2hex(random_bytes(7));
    }

    /**
     * @return string
     */
    abstract public function getId(): string;

    /**
     * @return string
     */
    abstract public function getName(): string;

    /**
     * @return void
     */
    public function printIdentity(): void
    {
        echo $this->getId() . ' : ' . $this->getName() . PHP_EOL;
    }
}