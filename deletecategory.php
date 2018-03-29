<?php
	include('dbconnect.php');
	session_start();
	if(!isset($_SESSION['admin'])){
		header('Location:index.php');
	}
	$delete_sql = "DELETE FROM category WHERE categoryID=".$_GET['categoryID'];
	$delete_query = mysqli_query($dbconnect, $delete_sql);

	$delete_stock_sql = "DELETE FROM stock WHERE categoryID=".$_GET['categoryID'];
	$delete_stock_query = mysqli_query($dbconnect, $delete_stock_sql);

?>
<h1>Category deleted</h1>
<p>Category has successufully deleted.</p>
<p><a href="index.php?page=admin">Return to admin panel</a></p>
