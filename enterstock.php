<?php

	session_start();

	if(!isset($_SESSION['admin'])){
		header('Location:index.php');
	}
//add stock item to db
	$values_name = mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['name']);
	$values_categoryID = mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['categoryID']);
	$values_price = mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['price']);
	$values_thumbnail = mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['thumbnail']);
	$values_topline = mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['topline']);
	$values_description = mysqli_real_escape_string($dbconnect, $_SESSION['addstock']['description']);

	$add_sql = "INSERT INTO stock(name, categoryID, price, thumbnail, topline, description) VALUES('$values_name', '$values_categoryID', '$values_price', '$values_thumbnail', '$values_topline', '$values_description')";
	
	$add_query = mysqli_query($dbconnect, $add_sql);

//unset the addstock session
	unset($_SESSION['addstock']);
?>
<p>New stock item has been entered.</p>
<p><a href="index.php?page=admin">Back to admin</a></p>