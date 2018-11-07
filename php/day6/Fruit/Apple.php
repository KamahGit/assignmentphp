<?php
require_once ('Fruit.php');
class Apple extends Fruit\Fruitparent
{



    public function displayFruit()
    {

        echo "The Apple fruit is ".$this->color." and costs ".$this->price." and its a ".$this->getisJuicy();
    }

}
$mango1 = new Apple(true,"yellow/green",55);
$mango1->displayFruit();
