<?php
/**
 * Created by PhpStorm.
 * User: wrx
 * Date: 15/10/2018
 * Time: 18:56
 */
class student {
    private $name;
    private $age;


    public function setName ($name)
    {
        $this->name = $name;
        var_dump ($this);
        return $this;
    }


    public function setAge ($age)
    {
        $this->age = $age;
        var_dump ($this);
        return $this;
    }

    public function displayStudent () {
        echo "<pre>";
        var_dump($this);
        echo "</pre>";
        echo "student:". $this->name. "Age: " .$this->age. "<br>";
    }



}
$stud =(new Student())->setName ('John')->setAge (10)->displayStudent ();
