<?php
/**
 * Date: 27.03.2018
 * Time: 14:48
 */


use PHPUnit\Framework\TestCase;
use App\mvc\Controller;

class MvcTest extends TestCase
{

    /**
     *call controller and result assertion true :)
     */
    public function testMvc()
    {
        $controller = (new Controller())->getModel();

        $this->assertEquals('<h1>admin</h1>', $controller);
    }
}