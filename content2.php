<?php
session_start();

/*	 	Name: Sang Hoon Lee
		Class: CS290 W15
		Assignment: 4 part 1
		Filename: content2.php
		Date: 02/11/15*/

if (!isset($_SESSION['valid']) && !isset($_POST['username'])){
	header("Location: http://web.engr.oregonstate.edu/~lees9/assignment%204p1/login.php?end=1");
}

echo "<br>Click <a href='http://web.engr.oregonstate.edu/~lees9/assignment%204p1/content1.php'>here</a> to go to content1.php";
?>