<?php
	include('dbconnect.php');
	session_start();
	if(!isset($_SESSION['admin'])){
		header('Location:index.php');
	}
?>
<h1>Confirm category to delete</h1>
<?php
	$delete_sql = "SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
	$delete_query = mysqli_query($dbconnect, $delete_sql);
	$delete_rs = mysqli_fetch_assoc($delete_query); 
//check if there are any stock items in this category
	$check_sql = "SELECT * FROM stock WHERE categoryID=".$_GET['categoryID'];
	$check_query = mysqli_query($dbconnect, $check_sql);
	$count = mysqli_num_rows($check_query);
?>
	<p><?php if($count > 0){
		echo "Warning!!! There are ".$count." stock item(s) in this category.If you delete the category they will also be removed from the database";
	}?></p>
	<p><?php echo "Do you want to delete ".$delete_rs['name']."?";?></p>
	<p><a href="index.php?page=deletecategory&categoryID=<?php echo $delete_rs['categoryID'];?>">Yes, I want to delete</a> | <a href="index.php?page=deletecategoryselect">No, go back </a> | <a href="index.php?page=admin"> Back to admin panel </a></p>
