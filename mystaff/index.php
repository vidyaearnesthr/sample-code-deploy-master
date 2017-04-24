<?php

$conn =mysqli_connect($_SERVER['localhpst'], $_SERVER['root'], $_SERVER['root1234'], $_SERVER['testdb']);
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}

echo "Fetched data successfully\n";
mysqli_close($conn);
?>
