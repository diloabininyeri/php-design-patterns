<?php
/*
 * test factory class
 */

include_once "../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\factory\Factory;

class FactoryTest extends TestCase
{

    public function testFactory()
    {
        $facttory = (new Factory())->createClass("Car");

        $carPrice = $facttory->price();
        $busPrice = (new Factory())->createClass("Bus");

        $this->assertEquals($carPrice, 15000);
        $this->assertEquals(25000, $busPrice->price());


    }

}