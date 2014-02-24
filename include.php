<?php
$server = 'dbinstance.cnt4ltyelgtv.us-west-1.rds.amazonaws.com';
$user = 'janeluo';
$password = 'yukisnow';
$dbname = 'janeluodb';

$connection = mysqli_connect($server,$user,$password,$dbname);
$mysqli = new mysqli($server,$user,$password,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>