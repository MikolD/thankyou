<?php
// if you do not understand what this means, create a file in the root directory of the project called .env, and copy and replace the following with the appropriate variable names
// dbhost="localhost"
// dbuser="root"
// dbpass="1234"
// dbname="medaase"

$dbhost = getenv('dbhost');
$dbuser = getenv('dbuser');
$dbpass = getenv('dbpass');
$dbname = getenv('dbname');

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("<script>alert('Connection Failed.')</script>");
}
