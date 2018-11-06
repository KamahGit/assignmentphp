<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 10/11/2018
 * Time: 7:00 PM
 */

class Database
{
    var $host = "127.0.0.1";
    var $user = "root";
    var $pass = "";
    var $db = "user";

    public function connect()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        return $conn;

    }

    public function saveRecords($tbName, $fname, $lname , $uname ,$pword)
    {
        $conn = $this->connect();
        mysqli_query($conn, "INSERT into $tbName values('$fname','$lname','$uname','$pword')");
        echo "<br><b>records saved</b><br>";
    }
}

//var_dump($_POST);


$db = new Database();
//var_dump(extract($_POST));
//var_dump(isset($save));

extract($_POST);
if (isset($save)){
    $db->saveRecords('register',$firstname,$lastname,$username,$password);
}
