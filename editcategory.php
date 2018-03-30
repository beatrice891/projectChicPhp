<?php
	include('dbconnect.php');
	if(!isset($_SESSION['admin'])){
		header('Location:index.php');
	}
	$_SESSION['editcategory']['categoryID']=$_GET['categoryID'];
	if(!isset($_SESSION['editcategory']['name'])){
//create the query for edit the item
	$edit_sql = "SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
	$edit_query = mysqli_query($dbconnect, $edit_sql);
	$edit_rs = mysqli_fetch_assoc($edit_query);
	$_SESSION['editcategory']['name'] = $edit_rs['name'];
}
?>
<h1>Edit category</h1>
<form action="index.php?page=editcategoryconfirm" method="post">
	<input type="text" name="name" value="<?php echo $_SESSION['editcategory']['name']; ?>">
	<input type="submit" name="update" value="Update">
</form>