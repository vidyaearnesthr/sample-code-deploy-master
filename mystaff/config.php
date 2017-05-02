<?php
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
    die("Connection failed: " . $conn->connect_error);
}else
{
	echo "Connected;
	 print_r($conn);
	echo "Connection Establish";
	
	$querysa1="SELECT * FROM `user_table` ";
$resultsa1=mysqli_query($conn,$querysa1);
	print_r($resultsa1);
if ($resultsa1->num_rows > 0)
	{
		while($rowsa1 = $resultsa1->fetch_assoc())  
		{   
	        //$session_ID=session_id();
		    echo $userRole=$rowsa1['role'];
		}
	}
	else
	{
		 echo "No record";
	}
	
}
?>
