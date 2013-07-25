<?php
// Create connection
$con=mysqli_connect("192.241.148.248","root","grantD3v","imggen_db");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>