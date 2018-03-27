<?php
/**
 * Date: 27.03.2018
 * Time: 20:06
 * all class interqaction eachself
 * maria john michle
 */


use PHPUnit\Framework\TestCase;
use App\mediator\Mediator;

class MediatorTest extends TestCase
{

    public function testMediator()
    {


        $mediator = new Mediator();

        $this->assertEquals($mediator->getMariaMessage(), $mediator->getMessageJhon());

    }

}