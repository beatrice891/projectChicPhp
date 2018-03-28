<?php
	session_start();
//check to see if the user is actually logged in, if not redirect
	if(!isset($_SESSION['admin'])){
		header('Location:index.php?page=admin');
	}
//check to see if user has submitted the add category form
	if(!isset($_POST['submit'])){
		header('Location:index.php?page=admin');
	}
//enter the new category
	$name = mysqli_real_escape_string($dbconnect, $_POST['name']);
	$newcategory_sql = "INSERT INTO category (name) VALUES('$name')";
	$newcategory_query = mysqli_query($dbconnect, $newcategory_sql);
?>
<p>New category has been entered</p>
<p><a href="index.php?page=admin">Return to admin panel</a></p>