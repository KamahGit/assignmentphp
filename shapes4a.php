<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 9/27/2018
 * Time: 4:53 PM
 */
echo "AREA ASSIGNMENT <hr>";


define('radius',rand(1,10),true);
define('length',rand(1,10),true);
define('width',rand(1,10),true);
define('side',rand(1,10),true);
define('pi',3.142,true);
$shapes = ['circle', 'square', 'rectangle', 'sphere'];

function areaCircle(){
    $area = pi * radius * radius;
    $perimeter = pi * 2 * radius;
    return array('area' => $area,'perimeter' => $perimeter);
    }
function areaSquare(){
    $area = side * side;
    $perimeter = 4 * side;
    return array('area' => $area,'perimeter' => $perimeter);
}
function areaRect(){
    $area = length * width;
    $perimeter = 2 * (length+width);
    return array('area' => $area,'perimeter' => $perimeter);
}
function areaSphere(){
    $area =  4 * pi * radius * radius;

    return $area;
}

foreach ($shapes as $shape){
    switch ($shape) {
        case 'circle':
           //storing array in result
            $result = areaCircle();
            $area = $result['area'];
            $perimeter = $result ['perimeter'];

            echo "Taking a radius of <b>:". radius . "</b> and pi as : <b>". pi . "</b>"; 
            break;
        case 'square' :
        // directly referencing the area with array key
            $area = areaSquare()['area'];
            $perimeter = areaSquare()['perimeter'];
            echo "Taking side of :<b>" . side . "</b>"; 
            break;
        case 'rectangle' :
            $area = areaRect()['area'];
            $perimeter = areaRect()['perimeter'];
            echo "Taking length of :<b>" . length . "</b> and width of :<b>" . width . "</b>";
            break;
        case 'sphere' :
            $area = areaSphere();
            $perimeter = "N/A";
            echo "Taking a radius of :<b>". radius . "</b> and pi as : <b>". pi . "</b>";
            break;
        default:
            exit;
            break;
    }
    echo " the area of " . $shape . " = <b>" . $area . "</b> and it's Perimeter = ".$perimeter."</b><br>";
}