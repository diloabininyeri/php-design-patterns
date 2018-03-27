<?php
/**
 * Date: 27.03.2018
 * Time: 23:53
 */

use PHPUnit\Framework\TestCase;
use App\memento\{
    Memento, Originator, CareTaker
};

class MementoTest extends TestCase
{

    public function testMemento()
    {
        $originator = new Originator();
        $caretaker = new CareTaker();

        $originator->setState("first");
        $originator->saveStateToMemento();
        $caretaker->add($originator->saveStateToMemento());
        $originator->setState("second");
        $originator->saveStateToMemento();

        $caretaker->add($originator->saveStateToMemento());


        $firstState = $originator->getStateFromMemento($caretaker->get(0));
        $seconState=$originator->getStateFromMemento($caretaker->get(1));


       $this->assertEquals($firstState, "first");

       $this->assertEquals("second",$seconState);
    }
}

