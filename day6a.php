<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/8/2018
 * Time: 5:48 PM
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

    public final function displayFruit(){
        echo "this fruit is ".$this->color." and costs ".$this->price." and its a ".$this->getisJuicy();
    }

    public function sayHello(){
        echo "Hello fruit";
    }


}