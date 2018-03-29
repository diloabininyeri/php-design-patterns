<?php
/*
 * Date: 29.03.2018
 * Time: 23:14
 */

use PHPUnit\Framework\TestCase;
use App\command\{
    Light, CommandInterface, CommandOffLight, CommandOnLight, Invoker
};

class CommandTest extends TestCase
{

    public function testCommand()
    {

        $light = new Light();
        $commandOfLight = new CommandOffLight($light);

        $commandOnLight = new CommandOnLight($light);

        $Invoker = new Invoker();
        $Invoker->add($commandOfLight);
        $Invoker->add($commandOnLight);
        $exec = $Invoker->execute();

        $this->assertEquals(["off", "on"], $exec);


    }
}


