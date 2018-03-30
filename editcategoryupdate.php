<?php
	include('dbconnect.php');

	session_start();
	if($_SESSION['admin']){
		header('Location:index.php');
	}

	$name = $_SESSION['editcategory']['name'];
	$id = $_SESSION['editcategory']['categoryID'];
	
	$update_sql = "UPDATE category SET name='$name' WHERE categoryID='$id'";
	$update_query = mysqli_query($dbconnect, $update_sql);
?>
<h1>Edit category</h1>
<p>Category successfully updated.</p>
<a href="index.php?page=admin">Back to admin panel</a>