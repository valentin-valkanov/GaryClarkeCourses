<?php
declare(strict_types=1);

class SubClass extends BaseClass
{
    public function getParentProtectedProperty():string
    {
        return $this->getProtectedProperty();
    }
}