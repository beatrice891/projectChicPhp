<?php
//include the dbconnection
include('dbconnect.php');
?>
<!--   -->
<!DOCTYPE html>
<html>
<head>
	<title>Chic magazine</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="index.php"><img src="images/logo.jpg" alt="Chic logo"/></a>
			</div>
			<div class="navigation">
				<p><!-- Links from db goes here  -->
				<?php include('categoryList.php');?>
					<a href="admin.php">Admin</a>
				</p>
			</div>
		</div>
		<!-- include header.php to see if user visitet other pages -->
		<?php include('header.php');?>
		<div class="maincontent">
			<?php 
			if(!isset($_GET['page'])) {
				include("home.php");
			} else {
				$page=$_GET['page'];
				include("$page.php");
			}
		?>
		</div>
		<div class="seccontent">
			<table width="259" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="80" align="top" class="textheading">Where:</td>
					<td width="179">Merivale Mall</td>
					<td>Something</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td align="top" class="textheading">When:</td>
					<td><p>Luni - Vineri : 09:00 - 18:00</p><p>Sambata - Duminica : 10:00 - 17:00</p></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div>
		<div class="footer">
		</div>
	</div>
</body>
</html>
