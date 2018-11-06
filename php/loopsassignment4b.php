<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 9/27/2018
 * Time: 7:33 PM
 */
/**
 *creating loops to echo 1 thru 10 and add these numbers	
 */
//for_loop
$sum = 0;
for ($i=1; $i <=10; $i++) {
echo $i."<br />";
$sum += $i;
}
echo $sum."<br />";


//do_while_loop
$i=1;
$sum=0;
do {
    echo $i."<br />";
    $i++;
}while($i<=10);

echo $sum."<br />";