<?php
/**
 * Date: 27.03.2018
 * Time: 23:31
 */

namespace App\memento;

use App\memento\Memento;


/**
 * Class CareTaker
 * @package App\memento
 */
class CareTaker
{

    /**
     * @var array
     */
    private $mementoArray;

    /**
     * CareTaker constructor.
     */
    public function __construct()
    {
        $this->mementoArray = [];
    }


    /**
     * @param $memento
     */
    public function add($memento)
    {
        $this->mementoArray[] = $memento;
    }

    /**
     * @param int $index
     * @return mixed
     */
    public function get(int $index)
    {
        return $this->mementoArray[$index];
    }


}