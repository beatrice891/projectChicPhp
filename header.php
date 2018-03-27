<!-- php code for generate links -->
<?php
	$cat_sql = "SELECT * FROM category";
	$cat_query = mysqli_query($dbconnect, $cat_sql);
	$cat_rs = mysqli_fetch_assoc($cat_query);
?>
<?php 
	do{
		echo $cat_rs['name'];
	}while($cat_rs = mysqli_fetch_assoc($cat_query))
?>