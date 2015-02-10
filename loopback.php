<!-- 	Name: Sang Hoon Lee
		Class: CS290 W15
		Assignment: 4 part 1
		Filename: loopback.php
		Date: 02/09/15
-->
<!DOCTYPE html>
<html lang="en">
<head>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<meta charset="utf-8" />
</head>
<body>
<?php
		$method = $_SERVER['REQUEST_METHOD'];
		$type = "TYPE";
		$parameter = "Parameter";
		$myArray = array(
				$type => $method,
				$parameter => array());
		echo json_encode($myArray);
?>
</body>
</html>