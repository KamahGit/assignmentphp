<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/8/2018
 * Time: 4:39 PM
 */
include_once ('StudentClass.php');
class ClassRep extends StudentClass
{
public $duties;


    public function getDuties()
    {
        return $this->duties;
    }


    public function setDuties($duties)
    {
        $this->duties = $duties;
    }
    public function __construct($fname, $lname, $age, $year, $fee_paid,$duties)
    {
        parent::__construct($fname, $lname, $age, $year, $fee_paid);
        $this->duties=$duties;
    }
    public function displayStudents()
    {
        parent::displayStudents();
        echo "<b>DUTIES</b><br>".$this->getDuties()[0].$this->getDuties()[1];
    }

}
$rep = array('fname' => 'James', 'lname' => 'Kinyanjui', 'age' => 17, 'year' => 1, 'feepaid' => 50000,'duty'=>['keep class quiet<br>','send reports<br>']);
$rep1 = new ClassRep($rep['fname'],$rep['lname'],$rep['age'],$rep['year'],$rep['feepaid'],$rep['duty']);
//var_dump($rep1);
echo "<br>CLASS PREFECT<br>";
$rep1->displayStudents();