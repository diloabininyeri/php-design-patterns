<?php
/**

 * Date: 27.03.2018
 * Time: 14:40
 */

namespace  App\mvc;

include_once "viewfunction.php";
use App\mvc\Model;

class Controller
{

    function getModel()
    {

         $model=new Model();
         $data=$model->get();
         return viewfunction("view.php",compact("data"));


    }
}