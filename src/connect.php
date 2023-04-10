<?php
$server = "localhost";
$user="root";
$pass="";
$database="cc_computing";
$conn=mysqli_connect($server,$user,$pass,$database);
mysqli_query($conn,'set names "utf8"');
?>