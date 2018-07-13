<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "INSERT INTO `students`(`name`, `email`, `password`) VALUES ('hossam' , 'hossam@gmail.com' , '123')";
$conn->exec($sql);
echo "Success";
	}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>