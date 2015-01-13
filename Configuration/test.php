<?php

include_once "../Models/Users.php";

$test = new Users();
$result = $test->test();
foreach($result as $key=> $value )
{
    echo $key."<br>";
}

?>