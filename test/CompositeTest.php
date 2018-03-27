<?php
/**
 * Date: 28.03.2018
 * Time: 01:01
 */

use PHPUnit\Framework\TestCase;

use App\composite\{
    Composite, InputPassword, InputText
};


class CompositeTest extends TestCase
{

    public function testComposite()
    {
        $inputText = new InputText("username");
        $inputPass = new InputPassword("password");

        $composite = new Composite();
        $composite->add($inputPass);
        $composite->add($inputText);
        $render=$composite->render();


        $this->assertEquals('<input type="password" name="password"/><input type="text" name="username"/>',$render);


    }
}