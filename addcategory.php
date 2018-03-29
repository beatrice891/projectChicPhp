<?php
	session_start();
//check to see if the user is actually logged in, if not redirect
	if(!isset($_SESSION['admin'])){
		header('Location:index.php?page=admin');
	}
?>
<h1>Add new category</h1>
<form method="post" action="index.php?page=entercategory"><!--modify the entercategory with confirmcategory-->
	<p><input type="text" name="name" size="40" maxlength="50"></p>
	<p><input type="submit" name="submit" value="Add category"></p>
</form>