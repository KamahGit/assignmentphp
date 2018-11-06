<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/4/2018
 * Time: 6:26 PM
 */

class Furniture
{
    public $name = "Chair";
    public $cost;
    public $color;

    public function setName($name)
    {
        $this->name = $name;
        var_dump($this);
        return $this;

    }

    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function __construct($name, $cost, $color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->cost = $cost;
    }

    public function getName(): string
    {
        return $this->name;

    }

    public function getCost()
    {
        return $this->cost;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function getFurnitureDescription()
    {
        echo "The furniture name is " . $this->name . " its " . $this->color . " in color and costs" . $this->cost . "<br />";
    }
}

//$furniture_one = new Furniture();
//$furniture_one->cost = 25000;
//$furniture_one->color = "Yellow";


//$furniture_one->getFurnitureDescription();
//echo $furniture_one->name;
//echo $furniture_one->cost;
//echo $furniture_one->color;

echo "METHOD CHAINED<br />";

//$furniture_one->setName("Table")->setColor("Blue")->setCost(80000)->getFurnitureDescription();

echo "CONSTRUCTOR<br />";
$furniture_two = new Furniture("Bench", 54000,"yellow");
$furniture_two->getFurnitureDescription();
//var_dump($furniture_two);
foreach ($furniture_two as $key=>$property){
    echo $key."=>".$property."<br />";
}
//THE QUESTION ON RETURNS IN THE BROWSER

function returnTest(){
    return 5;
}
echo returnTest();

var_dump(1*4);