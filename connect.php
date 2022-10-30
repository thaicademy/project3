<?php
$servername = "localhost";
$username = "somkiat";   
$password = "@6Eba0874";
$dbname = "thaicade_somkiat";  //ชื่อฐานข้อมูล

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("ผิดพลาด: " . mysqli_connect_error());
}

//echo "เชื่อมต่อฐานข้อมูลได้";
?>