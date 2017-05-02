<?php
$con= mysqli_connect("mystaffdev-test.cthwf1dxttem.ap-southeast-1.rds.amazonaws.com","dev","rdsdevtest") or die ("could not connect to mysql"); 

mysqli_select_db($con,"mystaff") or die ("no database");
?>
