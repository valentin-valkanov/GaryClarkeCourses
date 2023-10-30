<?php declare(strict_types=1);


/**
 * Class SubClass
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class SubClass extends BaseClass
{
    public function getParentProtectedProperty():string
    {
        return $this->getProtectedProperty();
    }
}