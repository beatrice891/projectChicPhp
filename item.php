<?php
//redirect to index.php if no stockID has been set
	if(!isset($_GET['stockID'])){
		header('Location: index.php');
	}
//Select all the information about stock item
//create  a join between stock and category
	$item_sql = "SELECT stock.*, category.name AS catname FROM stock JOIN category ON (stock.categoryID=category.categoryID) WHERE stock.stockID=".$_GET['stockID']; 
//Select all the information about stock item
	// $item_sql = "SELECT * FROM stock WHERE stockID=".$_GET['stockID'];

	// echo $item_sql;
	if($item_query = mysqli_query($dbconnect, $item_sql)){
		$item_rs = mysqli_fetch_assoc($item_query);	
		?>

		<p><img src="images/<?php echo $item_rs['bigphoto'];?>"></p>
		<h1><?php echo $item_rs['catname'];?></h1>
		<p><?php echo $item_rs['name'];?></p>
		<p><strong>Price: $<?php echo $item_rs['price'];?></strong></p>
		<p><?php echo $item_rs['description'];?></p>
	<?php }

?>