<?php
global $conn;
$conn = mysql_connect('mystaffdev-test.cthwf1dxttem.ap-southeast-1.rds.amazonaws.com','dev', 'rdsdevtest', 'mystaff');
if(! $conn )
{
  //die('Could not connect: ' . mysql_error());
  $conn = mysql_connect('mystaffdev-test.cthwf1dxttem.ap-southeast-1.rds.amazonaws.com','dev', 'rdsdevtest', 'mystaff');
  if(! $conn )
{
  die('Could not connect second also: ' . mysql_error());
}
}
//mysql_select_db('testdb',$conn);
$sql = 'SELECT * FROM `mystaff`.`user_table`';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "UserName: {$row['username']} <br> ". "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>
