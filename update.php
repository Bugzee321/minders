<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$sql = "UPDATE `students` SET `name`='hany' WHERE id = 3";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	echo "<pre>";
	print_r($stmt->rowCount());
	echo "<pre>";
	}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>