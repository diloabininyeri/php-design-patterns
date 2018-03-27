<?php
/*
 * Date: 27.03.2018
 * Time: 23:31
 */

namespace App\memento;

/**
 * Class Originator
 * @package App\memento
 */
class Originator
{

    /**
     * @var
     */
    private $state;

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return Memento
     */
    public function saveStateToMemento()
    {
        return new Memento($this->state);
    }

    /**
     * @param $memento
     * @return mixed
     */
    public function getStateFromMemento($memento)
    {
       return  $this->state = $memento->getState();


    }

}