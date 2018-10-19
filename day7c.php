<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/9/2018
 * Time: 5:35 PM
 */
include_once ('day7.php');
class DepartmentRep extends StudentAbstract
{

    private $department;
    private $fname;
    private $lname;

    function __construct($fname, $lname, $dep)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->department = $dep;
    }

    public function getInfo()
    {
        return "STUDENT :" . $this->fname . " " . $this->lname . " DEPARTMENT :" . $this->department;
    }
}
echo "DEPARTMENT REP DETAILS <hr>";
$deprep1 = new DepartmentRep("Luke","John","Catering");
echo $deprep1->getInfo();
