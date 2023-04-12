<?php
$server = "db";
$user="khoitv";
$pass="khoitv@123";
$database="cc_computing";
$mysqli = new mysqli($server, $user, $pass, $database);

if ($mysqli->connect_errno) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
} 

mysqli_query($mysqli, 'set names "utf8"');
?>