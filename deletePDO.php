<?php
include 'include.php';


try {
$db = new PDO('mysql:host=dbinstance.cnt4ltyelgtv.us-west-1.rds.amazonaws.com;dbname=janeluodb;charset=utf8', $user, $password);
array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e;
}

$query = $db->prepare("DELETE FROM pet WHERE name = ?");
$array = array('Choco');
$query->execute($array);

if ($query === false) {
	$error = $query->errorInfo();
	echo 'MySQL Error: ' . $error[2];
}

$query=$db->query("SELECT * FROM pet");

$fetch = $query->fetchAll();

foreach ($fetch as $pet) {
	echo $pet['name'] . " " . $pet['owner'] . "\n";
}

?>
