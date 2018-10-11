<?php
/**
 * parent class
 */
include_once ('VatInterface.php');
include_once ('objectTestInterface.php');
class Parentclass implements objectTestInterface
{
	protected $vat;

	public function TestObject($object)
	{
		if(is_object($object)){
			foreach ($object as $key => $value) {
				if (is_null($value)) {
					echo $key . " is Private/Protected <br>";
				}
				else {
					echo $key ."=". $value . " is Public it should be private<br>";
				}
			}
		}
	}
}

/**
 * Child class
 */
class Product extends Parentclass implements VatInterface
{
	public $name;
	public $cost;

	public function __construct($name,$cost)
	{
		$this->name = $name;
		$this->cost = $cost;

	}
	public function VatCalc($cost)
    {
        $this->vat = 0.16 * $cost;
//        return $this;
    }

}
$soda = new Product('Coke',50);
$soda->VatCalc($soda->cost);
$soda->TestObject($soda);