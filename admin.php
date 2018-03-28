<?php
//start session to keep the info when navigate
	session_start();
//check to see if someone try to login,check to see if submit has press
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$login_sql = "SELECT * FROM user WHERE username='$username' AND password=sha1('$password')";
		
		//set the admin session that load theat load the cpanel
		if($login_query = mysqli_query($dbconnect,$login_sql)){
			$login_rs = mysqli_fetch_assoc($login_query);
			$_SESSION['admin']=$login_rs['username'];

		}
	}

//if login display
	if(isset($_SESSION['admin'])){
		include('cpanel.php');
//if is not login display
	}else{
		include('login.php');
	}
?>