<?php
	include('dbconnect.php');

	session_start();

	if(!isset($_SESSION['admin'])){
		header('Location:index.php');
	}
//unset the session
	unset($_SESSION['editcategory']);
//create the query that return all from category table
	$edit_sql = "SELECT * FROM category";
	$edit_query = mysqli_query($dbconnect, $edit_sql);
	$edit_rs = mysqli_fetch_assoc($edit_query);
?>
<h1>Edit category</h1>
<?php
	do{ ?>
	<p><a href="index.php?page=editcategory&categoryID=<?php echo $edit_rs['categoryID'];?>"><?php echo $edit_rs['name'];?></a></p>
<?php }while($edit_rs = mysqli_fetch_assoc($edit_query));
?>