<?php
	include('dbconnect.php');

	session_start();
	if(!isset($_SESSION['admin'])){
		header('Location:index.php');
	}
	$_SESSION['editcategory']['name'] = $_POST['name'];
?>
<h1>Edit category</h1>
<p>Updated category name:<?php echo $_SESSION['editcategory']['name'];?></p>
<p><a href="index.php?page=editcategoryupdate">Confirm </a> | <a href="index.php?page=editcategory"> No,go back </a>| <a href="index.php?page=admin">Back to admin panel</a></p>