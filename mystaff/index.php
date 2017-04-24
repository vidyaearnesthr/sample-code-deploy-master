<?php

$conn =mysql_connect($_SERVER['localhost'], $_SERVER['root'], $_SERVER['root1234'], $_SERVER['testdb']);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

echo "Fetched data successfully\n";
mysql_close($conn);
?>
