<?php
$dbuser = 'root';
$dbpass = '';
$dbname = 'bdprueba';
$db = mysqli_connect("localhost",$dbuser,$dbpass,$dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("Asia/Manila"); 
?>

