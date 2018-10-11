<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/8/2018
 * Time: 5:46 PM
 */
include_once ('Fruitparent.php');
class Mango extends Fruitparent
{



    public function displayFruit()
    {

        echo "The Mango fruit is ".$this->color." and costs ".$this->price." and its a ".$this->getisJuicy();
    }


}
$mango1 = new Mango(true,"yellow/red/green",55);
$mango1->displayFruit();
