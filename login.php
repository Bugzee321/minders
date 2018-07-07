<?php
include_once 'function.php';
if (isset($_GET['ok']) && isset($_GET['num1']) && isset($_GET['num2']) &&isset($_GET['op'])) {
	switch ($_GET['op']) {
		case '+':
			_show_result(_add($_GET['num1'] , $_GET['num2']));
			break;
		case '-':
			 _show_result(_subtract($_GET['num1'] , $_GET['num2']));
			break;
		case '*':
			_show_result(_multiply($_GET['num1'] , $_GET['num2']));
			break;
		case '/':
			_show_result(_divided($_GET['num1'] , $_GET['num2']));
			break;
		default:
			echo "None Defined operation";
			break;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="GET" action="login.php">
	Num:1<input type="text" name="num1">
	<br>
	OP:<input type="text" name="op">
	<br>
	Num2:<input type="text" name="num2">
	<br>
	<input type="submit" name="ok">
</form>
</body>
</html>