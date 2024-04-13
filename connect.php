<?php

$dbHost ="localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "blogphp";

$conn =  mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if(!$conn){
    die("DB NOT CONNECTED!");
}
?>