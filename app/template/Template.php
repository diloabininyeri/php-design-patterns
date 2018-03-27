<?php
/**
 * Created by PhpStorm.
 * User: mehmet
 * Date: 27.03.2018
 * Time: 15:57
 */

namespace App\template;


abstract class Template{


    public function prepareDrink()
    {

        return $this->prepareWater().$this->prepareSolid();
    }

}