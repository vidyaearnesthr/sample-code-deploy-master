<?php
echo "server ".$_SERVER['localhost'];

 echo "username ". $_SERVER['root'];
echo "password ".$_SERVER['root1234'];
echo "db".$_SERVER['testdb'];
$conn = mysql_connect($_SERVER['localhost'], $_SERVER['root'], $_SERVER['root1234'], $_SERVER['testdb']);
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
