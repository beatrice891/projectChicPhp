<?php
	include('dbconnect.php');
	if(!isset($_SESSION['admin'])){
		header('Location');
	}
//create the query that return all from category table
	$edit_sql = "SELECT * FROM category";
	$edit_query = mysqli_query($dbconnect, $edit_sql);
	$edit_rs = mysqli_fetch_assoc($edit_query);
?>
<h1>Edit category</h1>
<?php
	do{ ?>
	<p><a href="index.php?page=editcategory&categoryID=<?php echo $edit_rs['categoryID'];?>"><?php echo $edit_rs['name'];?></p>
<?php }while($edit_rs = mysqli_fetch_assoc($edit_query));
?>