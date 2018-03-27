<?php
/**
 *
 * Date: 27.03.2018
 * Time: 16:21
 */

namespace App\strategy;

class Mongo implements StrategyInterface
{

    public  function update(array $data)
    {
         return "mongo";
    }

}