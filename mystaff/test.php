<?php
phpinfo();
var_dump(function_exists('mysqli_connect'));

echo "Welcome<br/>";
$servername = "mystaffdev-test.cthwf1dxttem.ap-southeast-1.rds.amazonaws.com";
$username = "dev";
$password = "rdsdevtest";
$dbname="mystaff";
echo "variables set </br>";
// Create connection


$conn = new mysqli($servername, $username, $password, $dbname);
echo "Connection Created </br>";
// Check connection
if ($conn->connect_error) {
	echo "Not Connected </br>";
    echo "Connection failed: " . $conn->connect_error;
		   }
           else{
			echo "Connected;
		  }
?>
