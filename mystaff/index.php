<?php
global $conn;
$conn = mysql_connect('testdbinstance.ceg2t1kc9pyr.us-west-2.rds.amazonaws.com','root', 'root1234', 'testdb');
if(! $conn )
{
  //die('Could not connect: ' . mysql_error());
  $conn = mysql_connect('dbinstance-replica.c8jztiemykcc.ap-southeast-1.rds.amazonaws.com','root', 'root1234', 'testdb');
  if(! $conn )
{
  die('Could not connect second also: ' . mysql_error());
}
}
//mysql_select_db('testdb',$conn);
$sql = 'SELECT * FROM `testdb`.`testdbtable`';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Tutorial ID :{$row['ID']}  <br> ".
         "UserName: {$row['User Name']} <br> ".
         "Password: {$row['Password']} <br> ".
          "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>
