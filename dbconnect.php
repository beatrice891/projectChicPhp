<?php
	$dbconnect = mysqli_connect("localhost", "root", "", "chic");
	if(mysqli_connect_errno()){
		echo "Connection failed:" .mysqli_connect_errno();
		exit;
	}

?>