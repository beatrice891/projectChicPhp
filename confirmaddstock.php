<?php
	session_start();
	
	if(!isset($_SESSION['admin'])){
		header('Location:index.php');
	}
	if(isset($_POST['submit'])){
		//add a session to keep value
		$_SESSION['addstock']['name'] = $_POST['name'];
		$_SESSION['addstock']['categoryID'] = $_POST['categoryID'];
		$_SESSION['addstock']['price'] = $_POST['price'];
		$_SESSION['addstock']['topline'] = $_POST['topline'];
		$_SESSION['addstock']['description'] = $_POST['description'];
	}else{
		header('Location:index.php');
	}
?>
<p><a href="index.php?page=addstock">Go back</a></p>