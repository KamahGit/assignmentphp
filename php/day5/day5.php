<?php
/**
* Task 
* In the Student class, define the variable $firstName and $lastName
* as private,  and use the constructor method to set the value of the two variables and the display them as a full name. 
*/
class Student
{
    private $fname;
    private $lname;

    public function __construct($fname,$lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function displayStudent()
    {
    	echo 'Student : '.$this->fname.''.$this->lname.'<br/>';
    }

}
$stud = (new Student())->setFname('James')->setLname('Junior')->displayStudent();