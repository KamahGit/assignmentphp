<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 9/27/2018
 * Time: 4:18 PM
 */
$number1=rand(1,10);
$number2=rand(1,10);
if ($number1 == $number2){
    echo $number1." is equal to ". $number2;
}
else {
    echo $number1." is not equal to ". $number2;
}