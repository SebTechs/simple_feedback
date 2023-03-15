<?php

$dbhost = "localhost";
$dbuser = "USERNAME";
$dbpass = "PASSWORD";
$dbname = "DATABASE NAME";

if (!$con  = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("failed to connect");
}
?>