<?php
/**
 * Created by PhpStorm.
 * User: mehmet
 * Date: 27.03.2018
 * Time: 16:21
 */
namespace  App\strategy;

class Oracle implements StrategyInterface
{
    public  function update(array $data)
    {
        return "oracle";
    }

}