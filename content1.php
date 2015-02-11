<?php
session_start();


/*	 	Name: Sang Hoon Lee
		Class: CS290 W15
		Assignment: 4 part 1
		Filename: content1.php
		Date: 02/11/15*/



//if never visited before
if (!isset($_SESSION['valid']) && !isset($_POST['username'])){
	header("Location: http://web.engr.oregonstate.edu/~lees9/assignment%204p1/login.php?end=1");  //added ?end=1 to destroy once back on login
}
else{
	//if never visited and empty username
	if (empty($_POST['username']) && !isset($_SESSION['visited'])) {
    	exit("A username must be entered. Click <a href='http://web.engr.oregonstate.edu/~lees9/assignment%204p1/login.php?end=1'>here</a> to login"); 
   	}
   	//if first time visiting content1.php
   	elseif (!isset($_SESSION['visited']) && isset($_POST['submit']) && isset($_POST['username'])){
   			$_SESSION['visited'] = 0;
   			$_SESSION['valid'] = 1;
   			$_SESSION['name'] = $_POST['username'];
   		}
   		else{
   			//if visiting after viewing other pages
   			$_SESSION['valid'] = 1;
   		}
   }

echo "Hello " . $_SESSION['name'] . " you have visited this page " . $_SESSION['visited'] . " times.<br>";
$_SESSION['visited']++;
echo "Click <a href='http://web.engr.oregonstate.edu/~lees9/assignment%204p1/login.php?end=1'>here</a> to log out.<br>";
echo "Click <a href='http://web.engr.oregonstate.edu/~lees9/assignment%204p1/content2.php'>here</a> for content2.php";
?>