<?php
/**
 * Date: 27.03.2018
 * Time: 21:47
 */

namespace App\abtractfactory;

use App\abtractfactory\AbstractFactory;

abstract class TextFactory extends AbstractFactory
{

    public function createText($data)
    {

        return new  TextData($data);
    }
}