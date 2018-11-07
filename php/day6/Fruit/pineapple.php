<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/8/2018
 * Time: 5:46 PM
 */
require_once ('Fruit.php');
class PineApple extends Fruit\Fruitparent
{



    public function displayFruit()
    {

        echo "The PineApple fruit is ".$this->color." and costs ".$this->price." and its a ".$this->getisJuicy();
    }


}
$mango1 = new PineApple(true,"yellow",50);
$mango1->displayFruit();
