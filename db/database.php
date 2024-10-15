<?php
$hostName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "amazon-data";

$conn = mysqli_connect($hostName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Something went wrong;");
}

?>
