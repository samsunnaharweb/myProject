<?php

$server     ="localhost";
$userName   ="root";
$password   ="";
$dbName     ="restaurant";
$tableName  ="clients";

$conn = mysqli_connect($server, $userName, $password, $dbName);

if(!$conn){
    die("Unsuccessful connect").mysqli_connect_error();
}

?>
