<?php
//if categoryID is not press,redirect to index.php
	if(!isset($_GET['categoryID'])){
		header('Location:index.php');
	}
//Select all items that belongs to selected categoryID
	//Create a join query
	$stock_sql = "SELECT stock.stockID, stock.name, stock.price, stock.thumbnail, category.name AS catname FROM stock JOIN category ON stock.categoryID=category.categoryID WHERE stock.categoryID=".$_GET['categoryID'];
	if($stock_query = mysqli_query($dbconnect, $stock_sql)){
		$stock_rs = mysqli_fetch_assoc($stock_query);
	}
	//if is no item in the stock
	if(mysqli_num_rows($stock_query) == 0){
		echo "Sorry we dont have that item in stock";
	}else{ ?>
			<h1><?php echo $stock_rs['catname'];?></h1>
			<?php
				do{ ?>
				<div class="item">
					<a href="index.php?page=item&stockID=<?php echo $stock_rs['stockID'];?>">
					<p><img src="images/<?php echo $stock_rs['thumbnail'];?>"</p>	
					<p><?php echo $stock_rs['name'];?></p>
					<p>Price: $<?php echo $stock_rs['price'];?></p></a>
				</div>

				<?php }while($stock_rs = mysqli_fetch_assoc($stock_query));


			?>
	<?php }

?>