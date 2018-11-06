<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/3/2018
 * Time: 7:53 PM
 */

class Fruit
{
    public $type;
    public $is_juicy;
    public $color;
    public $price;


    public function getisJuicy()
    {
        return $this->is_juicy > 0 ? "Juicy Fruit" : "Dry Fruit";
    }

    public function displayFruit()
    {
        echo "<tr><td>".$this->type."</td><td>".$this->getisJuicy()."</td><td>".$this->color." </td><td> ".$this->price."</td></tr>";
    }

    public function getType(){
        echo "<td>".$this->type."</td>";
    }


}
$fruits_array = [
                    ['apple',false,'red/yellow/green',20],
                    ['banana',false,'yellow',5],
                    ['orange',true,'orange',10],
                    ['mango',true,'yellow/green/red',25],
                    ['pineapple',true,'yellow',50]
                ];

echo "<table><thead>
                    <tr><td>Fruit</td><td>If Juicy</td><td>Color</td><td>Price</td></tr>
             </thead>
             <tbody>";
foreach ($fruits_array as $afruit){
    $fruit = new Fruit();
    $fruit->type = $afruit[0];
    $fruit->is_juicy = $afruit[1];
    $fruit->color = $afruit[2];
    $fruit->price = $afruit[3];
    $fruit->displayFruit();
}
echo "</tbody></table>";


