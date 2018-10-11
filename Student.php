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


$students_array =
[
    ['name'=>'John','class'=>'Evening','age'=>24,'gender'=>'Male'],
    ['name'=>'Sheila','class'=>'Morning','age'=>'30','gender'=>'Female'],
    ['name'=>'Brathe','class'=>'Afte','age'=>'37','gender'=>'Male']

];
foreach ($students_array as $student)
{
    $stud = new Student();
    $stud->name = $student['name'];
    $stud->age = $student['age'];
    $stud->class = $student['class'];
    $stud->gender = $student['gender'];
    $stud->getName();
    $stud->getAge();
    $stud->getGender();
    $stud->getClass();
    echo "<br />";
}
