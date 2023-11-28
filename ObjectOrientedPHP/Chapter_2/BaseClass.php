<?php
declare(strict_types=1);

class BaseClass
{
    public string $publicProperty = 'Public properties and methods can be accessed anywhere in your code';
    protected string $protectedProperty = 'Protected properties and methods can be accessed within the declaring class or from a subclass';
    private string $privateProperty = 'Private property and methods can only be accessed within a declaring class';


    protected function getProtectedProperty(): string
    {
        return $this->protectedProperty;
    }

    public function getPrivateProperty():string
    {
        return $this->privateProperty;
    }
}