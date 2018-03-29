<?php
/**
 * Date: 28.03.2018
 * Time: 00:53
 */

namespace App\composite;



/**
 * Class Composite
 * @package App\composite
 */
class Composite
{
    /**
     * @var array
     */
    /**
     * @var array
     */
    private $arrayList = [],
        $render;

    /**
     *
     * @param $class
     */
    public function add($class)
    {

        $this->arrayList[] = $class;
    }

    /**
     * @return array|string
     */
    public function render()
    {
        foreach ($this->arrayList as $item)
        {
            $this->render .= $item->render();
        }
        return $this->render;
    }
}