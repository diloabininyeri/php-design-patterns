<?php
/**
 * Time: 18:52
 */

include_once "../vendor/autoload.php";

use PHPUnit\Framework\TestCase;

use App\builder\{
    Page,BuilderPage,DirectorPage
};

class BuilderPageTest extends TestCase
{


    public function testBuilderPattern()
    {

        $builder=new BuilderPage();
        $director=new DirectorPage($builder);


        echo $director->publishPage();
    }
}


