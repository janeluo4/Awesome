<?php
include 'include.php';


$name='Snowball';
$owner='Lily';
$species = 'cat';
$sex='f';
$birthdate='1989-12-13';
$death=NULL;

$stmt = $mysqli->stmt_init();
if ($stmt->prepare("INSERT INTO pet (name, owner,
    species,sex,birth,death) VALUES (?, ?, ?,?,?, ?)")) {
       $stmt->bind_param("ssssss", $name, $owner, $species, $sex, $birth, $death);
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