<?php
/**
 * 
 */
include_once ('StudentAbstract.php');
class Classreptwo extends StudentAbstract
{
	private $class;
	private $fname;
	private $lname;

	function __construct($fname,$lname,$class)
	{
		$this->fname = $fname;
		$this->lname = $lname;
		$this->class = $class;
	}
	public function getInfo()
    {
       return "STUDENT :".$this->fname." ".$this->lname." CLASS :".$this->class;
    }
}
echo "CLASS REP DETAILS <hr>";
$classrep1 = new Classreptwo("Matthew","Mark","A1");
echo $classrep1->getInfo();