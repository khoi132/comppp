<?php
$server = "db";
$user="khoitv";
$pass="khoitv@123";
$database="cc_computing";
$mysqli = new mysqli($server,$user,$pass,$database);
// mysqli_query($conn,'set names "utf8"');
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>