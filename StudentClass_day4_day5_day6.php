<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/5/2018
 * Time: 3:53 PM
 * @property  continue
 */

class StudentClass
{
    private $fname;
    private $lname;
    private $age;
    private $year;
    private $fee_paid;
    public static $fee = 100000;

    /**
     * StudentClass constructor.
     * @param $fname
     * @param $lname
     * @param $age
     * @param $year
     * @param $fee_paid
     */
    public function __construct($fname,$lname, $age, $year, $fee_paid)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->year = $year;
        $this->fee_paid = $fee_paid;
    }

    public function getFname()
    {
        return $this->fname;
    }

    public function setFname($fname)
    {
        $this->fname = $fname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function getFeePaid()
    {
        return $this->fee_paid;
    }

    public function setFeePaid($fee_paid)
    {
        $this->fee_paid = $fee_paid;
        return $this;
    }

//    public function __set($property,$value)
//    {
////        if ($property == 'balance'){
////           $value = (self::$fee-$this->fee_paid);
////            $this->$property = $value;
////        }
//
//
//    }



    public function __get($param)
    {

        return $this->$param;
    }

    public function displayStudents(){
        echo "STUDENT :".$this->fname." ".$this->lname." AGE : ".$this->age." YEAR : ".$this->year."  FEE PAID :".$this->fee_paid." BALANCE :".$this->balance."<br />";

    }
}

$students_db =[
    ['fname' => 'James', 'lname' => 'Kinyanjui', 'age' => 17, 'year' => 1, 'feepaid' => 50000],
    ['fname' => 'Jane', 'lname' => 'Keter', 'age' => 19, 'year' => 2, 'feepaid' => 57000],
    ['fname' => 'Tony', 'lname' => 'Stark', 'age' => 19, 'year' => 3, 'feepaid' => 100000],
    ['fname' => 'Wong', 'lname' => 'Vembada', 'age' => 17, 'year' => 4, 'feepaid' => 10000]
];
echo "<br>CLASS<br>";

foreach ($students_db as $student){
    $stud = new StudentClass($student['fname'],$student['lname'],$student['age'],$student['year'],$student['feepaid']);
    $stud->balance = StudentClass::$fee-$stud->fee_paid;
    $stud->displayStudents();

}