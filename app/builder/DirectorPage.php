<?php
/**
 * Created by PhpStorm.
 * User: mehmet
 * Date: 27.03.2018
 * Time: 18:47
 */

namespace App\builder;

use App\builder\BuilderPage;

class DirectorPage
{
    private $buildirPage;

    public function __construct(BuilderPage $builderPage)
    {

        $this->buildirPage = builderPage;
    }


    private function setTitle()
    {
        $this->buildirPage->setTitle("buildir design pattern");
    }

    private function setBody()
    {

        $this->buildirPage->setBody("this is a body page");
    }

    private function setHead()
    {

        $this->buildirPage->setHead("this is a head");


    }


    public function publishPage()
    {
        return $this->buildirPage->page();
    }
}