<?php declare(strict_types=1);
namespace GaryClarke\Framework\Tests;

use GaryClarke\Framework\Container\Container;
use GaryClarke\Framework\Container\ContainerException;
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

    /** @test */
    public function the_container_has_a_service()
    {
        //Setup
        $container = new Container();

        //Do something
        $container->add('dependant-class', DependantClass::class);

        //Make assertion
        $this->assertTrue($container->has('dependant-class'));
        $this->assertFalse($container->has('not-existing-class'));
    }
    /** @test  */
    public function a_ContainerException_is_thrown_if_a_serice_cannot_be_found()
    {
        //Setup
        $container = new Container();

        //Expect exception
        $this->expectException(ContainerException::class);

        //Do something
        $container->add('foobar');
    }

}