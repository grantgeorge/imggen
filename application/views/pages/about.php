<p>"application/views/pages/home.php"</p>
<?php
// Create connection
$con=mysqli_connect("127.0.0.1","imggen","imggen","imggen_db");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
  	echo "Connection established";
  }
?>