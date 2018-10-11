<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/8/2018
 * Time: 6:43 PM
 */
include_once ('Mat.php');
class DoorMat extends Mat
{
    public function helloClient()
    {
        echo "Niaje Customer";
    }


}
$DoorMat1 = new DoorMat();
$DoorMat1->helloClient();