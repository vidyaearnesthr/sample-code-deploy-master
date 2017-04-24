<?php

$conn =mysql_connect($_SERVER['dbinstance.c96uwmzzvktk.us-west-2.rds.amazonaws.com'], $_SERVER['root'], $_SERVER['root1234'], $_SERVER['testdb'], $_SERVER['3306']);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

echo "Fetched data successfully\n";
mysql_close($conn);
?>
