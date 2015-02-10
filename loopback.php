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
		//check method GET or POST
		$method = $_SERVER['REQUEST_METHOD'];

		//if GET
		if ($method == "GET"){
			$myArray = array("Type" => $method, "parameters" => $_GET);
			if (empty($_GET)){
				foreach ($myArray as $key => $value){
					$myArray['parameters'] = "null";	//change value to null if nothing entered
				}
			}
		}

		//if POST
		if ($method == "POST"){
			$myArray = array("Type" => $method, "parameters" => $_POST);
			if (empty($_POST)){
				foreach ($myArray as $key => $value){
					$myArray['parameters'] = "null";	//change value to null if nothing entered
				}
			}
		}
		
		echo json_encode($myArray, JSON_FORCE_OBJECT);
?>
</body>
</html>