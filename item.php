<?php
//redirect to index.php if no stockID has been set
	if(!isset($_GET['stockID'])){
		header('Location: index.php');
	}
//Select all the information about stock item
	$item_sql = "SELECT * FROM stock WHERE stockID=".$_GET['stockID'];
	// echo $item_sql;
	if($item_query = mysqli_query($dbconnect, $item_sql)){
		$item_rs = mysqli_fetch_assoc($item_query);	
		?>
		<h1><?php echo $item_rs['name'];?></h1>
		<p>$<?php echo $item_rs['price'];?></p>
		<p><?php echo $item_rs['description'];?></p>
	<?php }

?>