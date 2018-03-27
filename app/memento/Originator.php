<?php
/*
 * Date: 27.03.2018
 * Time: 23:31
 */

namespace App\memento;

class Originator
{

    private $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function saveStateToMemento()
    {
        return new Memento($this->state);
    }

    public function getStateFromMemento($memento)
    {
       return  $this->state = $memento->getState();


    }

}