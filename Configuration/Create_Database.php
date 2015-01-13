<?php
/**
 * Created by PhpStorm.
 * User: SHUVO
 * Date: 1/12/2015
 * Time: 03:42 AM
 */
include_once "../Models/Users.php";

$host = 'localhost';
$username ='root';
$password = 'root';

$db = new mysqli($host,$username,$password);

if($db->connect_error)
{
    echo "Error.....";
}
else
{
    echo "Connected Successfully<br>";
}

if($db->query("CREATE DATABASE testMeIam")==true)
{
    echo "Database created Successfully<br>";
}
else
{
    echo "Something Went Wrong<br>";
}
$db->select_db("testMeIam");

    $test = new Users();
    $result = $test->test();

    $sql = "CREATE TABLE " . get_class($test) . "(";
    $i='f';
    foreach($result as $key=> $value )
    {
        if($i=='g') $sql .=",";
        $sql .=$key." varchar(255)";
       // echo $key."<br>";
        $i='g';
    }

    $sql .=");";

echo $sql;
if($db->query($sql)==TRUE)
{
    echo "Successfull<br>";
}


$db->close();