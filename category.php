
<?php
//if categoryID is not press,redirect to index.php
	if(!isset($_GET['categoryID'])){
		header('Location:index.php');
	}
//Select all items that belongs to selected categoryID
	//Create a join query
	$stock_sql = "SELECT stock.stockID, stock.name, stock.price, category.name AS catname FROM stock JOIN category ON stock.categoryID=category.categoryID WHERE stock.categoryID=".$_GET['categoryID'];
	if($stock_query = mysqli_query($dbconnect, $stock_sql)){
		$stock_rs = mysqli_fetch_assoc($stock_query);
	}

?>