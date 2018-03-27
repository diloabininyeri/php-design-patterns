<?php
/**
 * Date: 27.03.2018
 * Time: 21:22
 */

namespace App\abtractfactory;


abstract class Text
{

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}