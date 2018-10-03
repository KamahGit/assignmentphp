<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/3/2018
 * Time: 8:02 AM
 */
class FlowersAssign
{
    public $name;
    public $colour;
    public $good_smell;
    public $location;

    public function goodSmell(){
        return $this->good_smell > 0 ? "smells good" : "smells bad";
    }

    public function displayFlower(){

        echo "The ".$this->name." flower, is colour ".$this->colour." and ".$this->goodSmell().". It occurs in ".$this->location;
    }
}
$flower1 = new flowers();
$flower1->name = "rose";
$flower1->good_smell = true;
$flower1->colour = "red";
$flower1->location = "Kenya";
$flower1->displayFlower();