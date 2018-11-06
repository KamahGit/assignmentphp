<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 9/27/2018
 * Time: 4:31 PM
 */
echo "HOUSE SELECTION<hr><br>";
$i = 0;
$rooms = array("Single","Double","three");
if ($i<=2){
    switch ($rooms[$i]){
        case 'Single' :
            echo $rooms[$i] . " rooms cost 7000</br>";
            break;
        case 'Double' :
            echo $rooms[$i] . " rooms cost 10000</br>";
            break;
        case 'three' :
            echo $rooms[$i] . " rooms cost 14000</br>";
            break;
    }
    $i++;
}

if ($i<=2){
    switch ($rooms[$i]){
        case 'Single' :
            echo $rooms[$i] . " rooms cost 7000</br>";
            break;
        case 'Double' :
            echo $rooms[$i] . " rooms cost 10000</br>";
            break;
        case 'three' :
            echo $rooms[$i] . " rooms cost 14000</br>";
            break;
    }
    $i++;
}
if ($i<=2){
    switch ($rooms[$i]){
        case 'Single' :
            echo $rooms[$i] . " rooms cost 7000</br>";
            break;
        case 'Double' :
            echo $rooms[$i] . " rooms cost 10000</br>";
            break;
        case 'three' :
            echo $rooms[$i] . " rooms cost 14000</br>";
            break;
    }

}