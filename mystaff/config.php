<?php
global $servername;
	global $username;
	global $password;
	global $dbname;

/*$servername ="localhost";
$username ="root";
$password="";
$dbname="mystaff";*/


echo $servername = "mystaffdev-test.cthwf1dxttem.ap-southeast-1.rds.amazonaws.com";
$username = "dev";
$password = "rdsdevtest";
$dbname="MyStaffTest";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
