<?php
/**
 * Date: 27.03.2018
 * Time: 21:45
 */

namespace App\abtractfactory;

use App\abtractfactory\Text;


abstract class AbstractFactory
{
    abstract public function createData($data):Text;
}