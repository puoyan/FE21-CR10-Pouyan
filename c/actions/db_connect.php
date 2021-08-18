<?php 

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "fswd13_CR10_Pouyan_BigLibrary";


$connect = mysqli_connect($hostname, $username, $password, $dbname);


if(mysqli_connect_error()) {
    die("Connection failed");
}
