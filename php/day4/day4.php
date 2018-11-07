<?php
/**
* Task 
* In the Student class, define the variable $firstName and $lastName
* as private, and implement getters and setters to access the data. 
*/
class Student
{
    private $fname;
    private $lname;

    public function setFname($name)
    {
    	$this->fname = $name;
    	return $this;
    }


    public function setLname($name)
    {
    	$this->lname = $name;
    	return $this;
    }

    public function displayStudent()
    {
    	echo 'Student : '.$this->fname.''.$this->lname.'<br/>';
    }

}
$stud = (new Student())->setFname('James')->setLname('Junior')->displayStudent();