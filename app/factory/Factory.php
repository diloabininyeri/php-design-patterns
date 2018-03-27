<?php
/*
 *
 *
 */
namespace App\factory;

/*use App\factory\{
    Car,Bus
};*/
class Factory
{
    private $nameSpace;
    /**
     * factory method return class
     * @param $className
     * @return mixed
     */
    public function createClass($className)
    {

        $this->nameSpace='App\factory\\'.$className;
        return new $this->nameSpace;
    }
}