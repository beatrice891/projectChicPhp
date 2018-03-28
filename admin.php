<?php
//start session to keep the info when navigate
	session_start();

//if login display
	if(isset($_SESSION['admin'])){
		include('cpanel.php');
//if is not login display
	}else{
		include('login.php');
	}
?>