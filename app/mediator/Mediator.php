<?php
/**
 * Date: 27.03.2018
 * Time: 19:27
 */

namespace App\mediator;

use App\mediator\{John,Maria,Michle};

/**
 * Class Mediator
 * @package App\mediator
 */
class Mediator
{
    /**
     * @var \App\mediator\John
     */
    /**
     * @var \App\mediator\John|\App\mediator\Maria
     */
    /**
     * @var \App\mediator\John|\App\mediator\Maria|\App\mediator\Michle
     */
    public  $john,
            $maria,
            $michle;

    /**
     * Mediator constructor.
     */
    public function __construct()
    {

        $this->john=new John($this);
        $this->maria=new Maria($this);
        $this->michle=new Michle($this);
    }


    /**
     * @return string
     */
    public function getMessageJhon()
    {
        return $this->john->message();
    }


    /**
     * @return string
     */
    public  function getMariaMessage()
    {
        return $this->maria->message();
    }

}