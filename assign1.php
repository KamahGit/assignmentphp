<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 9/21/2018
 * Time: 7:52 PM
 */

$name="Bruce";
$course="Software Development Training";
$school="Cytonn College of Innovation And Entrepreneurship";

/**
 * @param $name
 */
function announce($name,$course,$school){
    var_dump($name);
    echo "Studies $course";
    echo "At $school";
}
announce($name,$course,$school);

echo "<br />";
for ($i=1; $i<=5; $i++) { 
    echo "$i"."\n";
}


echo nl2br("Welcome\r\nThis is my HTML document", false);



//while and do while loop
$i=10;
//do {
//    echo $i."\n";
//    $i--;
//}while($i>0);
while($i>0){
    echo $i."\n";
    $i--;
}

//array
$food=['KDF',
       'OVONDO',
        'CHAPO',
        'GITHERI'
      ];

$i=1;

//forEach Loop
foreach ($food as $item){
        echo $item."\n";
}