<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 9/27/2018
 * Time: 5:22 PM
 */

echo "DOOR ASSIGNMENT <hr>";
$keyarr = array(0,1);
echo "Turning Knob ....<br /> Whoops Door Locked ...<br />";
echo "Entering Key .....<br /> Detecting Key ....<br />";
$ran = array_rand($keyarr);


if ($ran == 0){
    echo "Sorry Dude .. Tafuta funguo ingine apo!";
}
else {
    echo "TEREEEENG MLANGO IMEFUNGUKA INGIA";
}