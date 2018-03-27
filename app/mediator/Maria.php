<?php
/**
 * Date: 27.03.2018
 * Time: 19:53
 */

namespace App\mediator;


/**
 * Class Maria
 * @package App\mediator
 */
class Maria
{

    /**
     * @var
     */
    private $mediator;

    /**
     * Maria constructor.
     * @param $mediator
     */
    public function __construct($mediator)
    {

        $this->mediator=$mediator;
    }


    /**
     * @return mixed
     */
    public function message()
    {

        return $this->mediator->john->message();
    }
}