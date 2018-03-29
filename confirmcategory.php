<?php
//
session_start();
//check to see if the user is actually logged in, if not redirect
	if(!isset($_SESSION['admin'])){
		header('Location:index.php?page=admin');
	}
//check to see if the user submitted the add category form
	if(!isset($_POST['submit'])){
		header('Location:index.php?page=admin');
	}
// set a new session category
	$_SESSION['addcategory']['name'] = $_POST['name'];
?>
<h1>Confirm category name</h1>
<p>You enter:<?php echo $_POST['name'];?></p>
<p><a href="index.php?page=entercategory">Correct, continue</a> | <a href="index.php?page=addcategory">Go back</a></p>