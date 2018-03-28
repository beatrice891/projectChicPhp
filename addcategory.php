<?php
	session_start();
//check to see if the user is actually logged in, if not redirect
	if(!isset($_SESSION['admin'])){
		header('Location:index.php?page=admin');
	}
?>


<h1>Add new category</h1>