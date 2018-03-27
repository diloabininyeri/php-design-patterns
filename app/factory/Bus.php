<?php
/**
 * Created by PhpStorm.
 * User: mehmet
 * Date: 27.03.2018
 * Time: 15:26
 */

namespace App\factory;


class Bus
{

    /**
     * @return string
     */
    public function getModel()
    {
        return "MAN"; //AHİRETTE İMAN :)
    }

    /**
     * @return int
     */
    public function price()
    {
        return 25000;
    }
}