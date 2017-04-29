<?php
global $conn;

$conn = mysql_connect('mystaffdev-test.cthwf1dxttem.ap-southeast-1.rds.amazonaws.com', 'dev', 'rdsdevtest');
if(! $conn )
{
  //die('Could not connect 1st: ' . mysql_error());
 echo "error in 1st connetcion";
  
}
mysql_select_db('MyStaffDev',$conn);
$sql = 'SELECT * FROM `MyStaffDev`.`user_table`';


$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Tutorial ID :{$row['id']}  <br> ".
         "UserName: {$row['username']} <br> ".
         "Password: {$row['password']} <br> ".
          "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>
