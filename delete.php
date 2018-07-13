<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "DELETE FROM `students` WHERE id = 4";
$conn->exec($sql);
echo "Deleted";
	}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>