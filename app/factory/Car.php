<?php

namespace App\factory;

class Car
{

    /**
     * @return string
     */
    public function getModel()
    {
        return "BMW";
    }

    /**
     * @return int
     */
    public function price()
    {
        return 15000;
    }


}