<?php
require_once('Fruit.php');
class Mango extends Fruit\Fruitparent
{



    public function displayFruit()
    {

        echo "The Mango fruit is ".$this->color." and costs ".$this->price." and its a ".$this->getisJuicy();
    }


}
$mango1 = new Mango(true,"yellow/red/green",55);
$mango1->displayFruit();
