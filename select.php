<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$sql = "SELECT  `name`, `email` FROM `students`";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	echo "<pre>";
	print_r($stmt->fetchAll());
	echo "<pre>";
	}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>