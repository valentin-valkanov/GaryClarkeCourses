<?php declare(strict_types=1);

namespace GaryClarke\Framework\Tests;

/**
 * Class DependantClass
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class DependantClass
{
    public function __construct(private DependencyClass $dependency)
    {
    }

    /**
     * @return DependencyClass
     */
    public function getDependency(): DependencyClass
    {
        return $this->dependency;
    }


}