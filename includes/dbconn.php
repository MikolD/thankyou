<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "medaase";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("<script>alert('Connection Failed.')</script>");
}

?>