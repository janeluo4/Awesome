<?php
include 'include.php';

$result = mysqli_query($connection,"SELECT * FROM pet");
if($result === FALSE) {
    echo 'QUERY DOESNT WORK';
}




while($row = mysqli_fetch_array($result))
  {
  echo $row['name'] . " " . $row['owner'] . " " .$row['species'] . " " . $row['sex'] . "\n";

  echo "<br>";
  }


mysqli_free_result($result);
mysqli_close($connection);

?>