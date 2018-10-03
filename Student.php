<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/3/2018
 * Time: 5:27 PM
 */

class Student
{
    public $name;
    public $class;
    public $age;
    public $gender;

    public function welCome(){
        echo "Welcome To Punjab University<br />";
    }
    public function getName(){
        echo "<b>Student Name</b> :".$this->name."<br />";
    }
    public function getClass(){
        echo "<b>Student Class</b> :".$this->class."<br />";
    }
    public function getAge(){
        echo "<b>Student Age</b> :".$this->age."<br />";
    }
    public function getGender(){
        echo "<b>Student Gender</b> :".$this->gender."<br />";
    }
}
$student1 = new Student();
$student1->name = "Ferdinand Waititu";
$student1->gender = "male";
$student1->class = "Governance";
$student1->age = 25;
$student1->welCome();
$student1->getName();
$student1->getAge();
$student1->getClass();
$student1->getGender();
