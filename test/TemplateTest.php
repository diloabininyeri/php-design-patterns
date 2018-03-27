<?php

use PHPUnit\Framework\TestCase;
use App\factory\Factory;
use App\template\{
    Tea, Cafe
};

class TemplateTest extends TestCase
{

    /**
     *
     */
    public function testTemplate()
    {

        $tea = new Tea();
        $resultTea = $tea->prepareDrink();


        $this->assertEquals("hot Tea", $resultTea);
    }
}