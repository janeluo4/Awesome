<?php
include 'include.php';

$name='Mickey';
$owner='Gwen';
$species = 'cat';
$sex='f';
$birthdate='1989-12-13';
$death=NULL;

$stmt = $mysqli->stmt_init();
if ($stmt->prepare("UPDATE pet SET name = ? WHERE owner = ? ")) {
       $stmt->bind_param("ss", $name, $owner);
       $stmt->execute();
       $stmt->close();
}


$result = mysqli_query($connection,"SELECT * FROM pet");


while($row = mysqli_fetch_array($result))
  {
  echo $row['name'] . " " . $row['owner'];

  echo "<br>";
  }


mysqli_free_result($result);
mysqli_close($connection);

?>