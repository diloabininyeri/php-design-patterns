<?php

namespace App\strategy;


use App\strategy\{
  Mongo,Mysql,Oracle
};


class Strategyclass
{
    private $nameSpace,
            $class;

    /**generate class
     * Strategyclass constructor.
     * @param \App\strategy\StrategyInterface $class
     */
    public function __construct($class)
    {
        $this->nameSpace='App\strategy\\'.$class;
        $this->class=new $this->nameSpace;
    }


    public function update(array $data)
    {
        return $this->class->update($data);
    }
}