<?php
session_start();
?>
<!-- 	Name: Sang Hoon Lee
		Class: CS290 W15
		Assignment: 4 part 1
		Filename: login.php
		Date: 02/11/15
-->
<!DOCTYPE html>
<html>
<head>
<?php
if ($_GET['end'] == 1){		//used a url get for destroyoing the whole session
	session_unset();
	session_destroy();
}
?>
</head>
<body>

	<!--form for pho content 1 -->
	<form action="content1.php" method="POST">
		Username: <input type="text" name="username">
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>