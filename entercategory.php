<?php
	session_start();
//check to see if the user is actually logged in, if not redirect
	if(!isset($_SESSION['admin'])){
		header('Location:index.php?page=admin');
	}
//check to see if user has submitted the add category form
	if(!isset($_SESSION['addcategory']['name'])){
		header('Location:index.php?page=admin');
	}
	//remove the confirmation submit button and added to confirmcategory.php

//enter the new category
	$name = mysqli_real_escape_string($dbconnect, $_SESSION['addcategory']['name']);
	$newcategory_sql = "INSERT INTO category (name) VALUES('$name')";
	$newcategory_query = mysqli_query($dbconnect, $newcategory_sql);

//remove the data has inserted in input
	unset($_SESSION['addcategory']['name']);
?>
<p>New category has been entered</p>
<p><a href="index.php?page=admin">Return to admin panel</a></p>