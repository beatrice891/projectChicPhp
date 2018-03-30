<!--multipart/form-data help to upload images
	thumbnail - will be named fileToUpload-->
<?php
	session_start();
	if(!isset($_SESSION['admin'])){
		header('Location:index');
	}
	if(!isset($_SESSION['addstock'])){
		$_SESSION['addstock']['name'] = "";
		$_SESSION['addstock']['categoryID'] = "1";
		$_SESSION['addstock']['price'] = "";
		$_SESSION['addstock']['topline'] = "";
		$_SESSION['addstock']['description'] = "";
	}
?>
<div class="maincontent">
	<p><a href="index.php?page=admin">Back to admin</a></p>
	<h1>Enter details for new item</h1>
	<form method="post" action="index.php?page=confirmaddstock" enctype="multipart/form-data">
		<p>Stock item name: <input type="text" name="name" value="<?php echo $_SESSION['addstock']['name'];?>"/></p>
		<p>Thumbnail image: <input type="file" name="fileToUpload" id="fileToUpload"/></p>
		<p>Category: 
			<select name="categoryID">
				<?php
					$query_sql = "SELECT * FROM category";
					$query_query = mysqli_query($dbconnect, $query_sql);
					$query_rs = mysqli_fetch_assoc($query_query);
					//display  all
						do{ ?>
							<option value="<?php echo $query_rs['categoryID'];?>"

								<?php
								//condition to keep the same value in category 
									if($query_rs['categoryID'] == $_SESSION['addstock']['categoryID']){
										echo "selected=selected";
									}
								?>

							><?php echo $query_rs['name'];?></option>
						<?php }while($query_rs = mysqli_fetch_assoc($query_query));
				?>
			</select> 
		</p>
		<p>Price: $ <input type="text" name="price" value="<?php echo $_SESSION['addstock']['price'];?>"/></p>
		<p>Topline: <input type="text" name="topline" value="<?php echo $_SESSION['addstock']['topline'];?>"/></p>
		<p>Description: <textarea name="description" cols="60" rows="5"><?php echo $_SESSION['addstock']['description'];?></textarea></p>
		<input type="submit" name="submit" value="Submit">
	</form>
</div>