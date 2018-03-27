<?php
/**
 * Created by PhpStorm.
 * User: mehmet
 * Date: 27.03.2018
 * Time: 14:44
 */

/*
 * normal status using include_once instead return
 * for example
 * function viewfunction($file, $variables = [])
{

    extract($variables);

    return include_once "$file.php";

}
 */
function viewfunction($file, $variables = [])
{

    extract($variables);

    return '<h1>' . $data["user"] . '</h1>';

}