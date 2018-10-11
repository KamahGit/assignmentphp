<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/5/2018
 * Time: 3:53 PM
 * @property  continue
 */

class StudentClass2
{
    protected $fname;
    protected $lname;
    protected $age;
    protected $class;



    public function __construct($fname,$lname, $age, $class)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->class = $class;
    }


    public function displayStudents(){
        echo "STUDENT :".$this->fname." ".$this->lname." AGE : ".$this->age."CLASS".$this->class."<br />";

    }
}


echo "<br>CLASS<br>";
StudentsDb::$students_db;
foreach ($students_db as $student){
    $stud = new StudentClass($student['fname'],$student['lname'],$student['age'],$student['year'],$student['feepaid']);
    $stud->displayStudents();

}