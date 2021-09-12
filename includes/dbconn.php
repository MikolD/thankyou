<?php
// if you do not understand what this means, create a file in this working directory of the project called .env, and copy and replace the following with the appropriate variable names
// dbhost=localhost
// dbuser=root
// dbpass=1234
// dbname=medaase
include("./includes/loadenvfile.php");


use DotenvLoader\DotEnv;

(new DotEnv(__DIR__ . '/.env'))->load();

$dbhost = getenv('dbhost', true);
$dbuser = getenv('dbuser', true);
$dbpass = getenv('dbpass', true);
$dbname = getenv('dbname', true);

// printf("%s,%s,%s,%s", $dbhost, $dbuser, $dbpass, $dbname);
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
    // echo "<script>alert(\"database:" .   $dbhost  . "\")</script>";

    die("<script>alert('Connection Failed.') </script>");
}
