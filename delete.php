<?php
include 'include.php';

$name='Buffy';
$owner='Lily';
$species = 'cat';
$sex='f';
$birthdate='1989-12-13';
$death=NULL;


$stmt = $mysqli->stmt_init();
if ($stmt->prepare("DELETE FROM pet WHERE name = ?")) {
       $stmt->bind_param("s", $name);
       $stmt->execute();
       $stmt->close();
}


$result = mysqli_query($connection,"SELECT * FROM pet");

while($row = mysqli_fetch_array($result))
  {
  echo $row['name'] . " " . $row['owner'] . " " .$row['species'] . " " . $row['sex'] .'\n';

  echo "<br>";
  }



mysqli_free_result($result);
mysqli_close($connection);

?>