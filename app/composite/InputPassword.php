<?php
/**
 * Date: 28.03.2018
 * Time: 00:56
 */
namespace  App\composite;

class InputPassword
{
    private $htmlElement;
    public function __construct($name)
    {
        $this->htmlElement='<input type="password" name="'.$name.'"/>';
    }

    public function render(){

        return $this->htmlElement;
    }
}