<?php
$server = "db";
$user="khoitv";
$pass="khoitv@123";
$database="cc_computing";
$conn=mysqli_connect($server,$user,$pass,$database);
mysqli_query($conn,'set names "utf8"');
?>