<?php
/**

 * Date: 27.03.2018
 * Time: 23:30
 */

namespace App\memento;


/**
 * Class Memento
 * @package App\memento
 */
class Memento
{

    /**
     * @var
     */
    public $state;

    /**
     * Memento constructor.
     * @param $state
     */
    public function __construct($state)
    {
        $this->state=$state;

    }

    /**
     * @return mixed
     */
    public function getState()
    {

        return $this->state;
    }
}