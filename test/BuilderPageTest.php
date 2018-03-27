<?php
/**
 * Time: 18:52
 */

include_once "../vendor/autoload.php";

use PHPUnit\Framework\TestCase;

use App\builder\{Page,BuilderPage,DirectorPage};

class BuilderPageTest
{


    public function testBuilderPattern()
    {


        $buidlder=new BuilderPage();

        $director=new DirectorPage($buidlder);

        echo $director->publishPage();
    }
}