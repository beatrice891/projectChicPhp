<?php
	include('dbconnect.php');
	session_start();
	if(!isset($_SESSION['admin'])){
		header('Location:index.php');
	}
?>
<h1>Delete category</h1>
<?php
	$delete_sql = "SELECT * FROM category";
	$delete_query = mysqli_query($dbconnect, $delete_sql);
	$delete_rs = mysqli_fetch_assoc($delete_query);
		do{ ?>
			<p><a href="index.php?page=deletecategoryconfirm&categoryID=<?php echo $delete_rs['categoryID'];?>"><?php echo $delete_rs['name'];?></a></p>

		<?php }while($delete_rs = mysqli_fetch_assoc($delete_query));



?>