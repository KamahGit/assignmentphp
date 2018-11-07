<?php
/**
* Task 
* Add two methods to represent the application and admission 
* functionalities the Student class. The methods would echo a string
* placeholder or their actual purpose. 
*/
class Student
{
    private $name;
    private $class;
    //initialized admitted and applied vars as false
    private $is_admitted = false;
    private $is_applying = false;


    public function setName($name)
    {
        $this->name = $name;
        return $this;

    }


    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    public function apply()
    {
        $this->is_applying = true;
        return $this;
    }
    public function getAdmitted()
    {
        if ($this->is_applying){
            $this->is_admitted = true;
            return $this;
        }
        else{
            return $this;
        }
    }
    public function getStatus()
    {
        $app = $this->is_applying == false ? " NOT APPLIED " : " APPLIED ";
        $adm = $this->is_admitted ==false? " NOT ADMITTED " : " ADMITTED ";
        echo "STUDENT : ".$this->name."CLASS : ".$this->class.$app.$adm."<br />";
    }
}

//applied
$stud = (new Student())->setName('James Kinyua')->setClass('one')->apply()->getAdmitted()->getStatus();

//didnt apply
$stud2 = (new Student())->setName('Huan Hames')->setClass('Two')->getAdmitted()->getStatus();