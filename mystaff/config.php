<?php
echo "server ".'dbinstance.c96uwmzzvktk.us-west-2.rds.amazonaws.com';
 echo "username ". 'root';
echo "password ".'root1234';
echo "db".'testdb';

$conn = mysql_connect('dbinstance.c96uwmzzvktk.us-west-2.rds.amazonaws.com', 'root', 'root1234');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('testdb',$conn);
$sql = 'SELECT * FROM `testdb`.`logTable`';


$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Tutorial ID :{$row['id']}  <br> ".
         "UserName: {$row['userName']} <br> ".
         "Password: {$row['password']} <br> ".
          "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>
