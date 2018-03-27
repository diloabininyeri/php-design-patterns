<?php
/**
 * Date: 27.03.2018
 * Time: 19:55
 */

namespace App\mediator;

use App\mediator\Mediator;

/**
 * Class Michle
 * @package App\mediator
 */
class Michle
{

    /**
     * Michle constructor.
     * @param $mediator
     */
    public function __construct($mediator)
    {
        $this->mediator = $mediator;
    }


    /**
     * @return mixed
     */
    function message()
    {

        return $this->mediator->john->mesaage();
    }
}