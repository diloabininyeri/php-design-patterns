<?php
/**
 * Date: 28.03.2018
 * Time: 00:56
 */
namespace App\composite;

class InputText
{

    private $htmlElement;

    /**
     * InputText constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->htmlElement = '<input type="text" name="'.$name.'"/>';
    }

    /**
     * @return string
     */
    public function render()
    {

        return $this->htmlElement;
    }

}