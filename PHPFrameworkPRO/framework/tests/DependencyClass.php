<?php declare(strict_types=1);

namespace GaryClarke\Framework\Tests;

/**
 * Class DependencyClass
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class DependencyClass
{
    public function __construct(private SubDependencyClass $subDependency)
    {
    }

    public function getSubDependency(): SubDependencyClass
    {
        return $this->subDependency;
    }
}