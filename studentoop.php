<?php
/**
 * OOP
 */
class CytonnClass 
{
	public $students;
	public $name;
	public $length;
	public $type;

	

	
}
$sdt_class = new CytonnClass;
$sdt_class->name = "Software Development";
$sdt_class->length = 3;
$sdt_class->students = 20;
$sdt_class->type = "Evening Class";
echo "The ".$sdt_class->name."".$sdt_class->type." runs for ".$sdt_class->length." hours. And has ".$sdt_class->students." students";


/**
 * PROCEDURAL
 */
$class_name="Software Development";
$class_length = 3;
$class_students = 20;
$class_type = "Evening Class";
echo "The ".$class_name."".$class_type." runs for ".$class_length." hours. And has ".$class_students." students";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>OBSERVATIONS</h2>

<ol><li>IN OOP THE VARIABLE INITIALIZATION CAN BE FOLLOWED EASILY WHILE IN PROCEDURAL THE PROCESS LARGELY DEPENDS ON HOW THE PROGRAMMER      WRITES CODE</li> 

<li>IN OOP, USE OF ARROWS ELIMINATES THE NEED TO STRONGLY/SPECIFICALLY NAME VARIABLES AS THE POINTER DIRECTS EASILY MEANING TWO CLASSES CAN HAVE SIMILARE VARIABLES FOR DIFFERENT PURPOSES</li>
<li>IN OOP MUCH EMPHASIS IS GIVEN TO DATA ORGANIZATION EVEN BEFORE PROCESSING SO DATA CAN BE EASILY FORMATTED AND DEBUGGED</li>
<LI>VARIABLES CAN BE CHANGED DIRECTLY FROM THE CLASS TO AFFECT NEW OBJECTS WHILE IN PROCEDURAL IT MAY MEAN REWRITTTING A LOT OF CODE</LI>
</body>
</html>

