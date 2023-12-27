<?php declare(strict_types=1);
namespace GaryClarke\Framework\Tests;

use GaryClarke\Framework\Container\Container;
use PHPUnit\Framework\TestCase;

/**
 * Class ContainerTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ContainerTest extends TestCase
{
    /** @test */
    public function a_service_can_be_retrieved_from_the_container()
    {
        //Setup
        $container = new Container();

        //Do something
        // id string, concrete class name string| object
        $container->add('dependant-class', DependantClass::class);

        //Make assertions
        $this->assertInstanceOf(DependantClass::class, $container->get('dependant-class'));
    }
}