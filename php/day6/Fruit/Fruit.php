<?php
namespace Fruit;
/**
* Create a class: Fruit, and have several fruit types
* (e.g. mango, apple, pineapples, dates) inherit from it. 
* In this example: ensure that you demonstrate the use of the 
* concepts stated below: parent class, child class, protected
* access modifier, method overriding, and the use of the final
* keyword to prevent method overriding.
*/
class Fruitparent
{
    protected $is_juicy;
    protected $color;
    protected $price;


    public function __construct($is_juicy,$color,$price)
    {
        $this->is_juicy = $is_juicy;
        $this->color = $color;
        $this->price=$price;
    }
    public final function getisJuicy()
    {
        return $this->is_juicy > 0 ? "Juicy Fruit" : "Dry Fruit";
    }

    public function displayFruit(){
        echo "this fruit is ".$this->color." and costs ".$this->price." and its a ".$this->getisJuicy();
    }

    public function sayHello(){
        echo "Hello fruit";
    }


}