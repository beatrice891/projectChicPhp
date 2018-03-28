<h1>Login</h1>
<form name="login" method="post" action="index.php?page=admin">
	<p>Username <input name="username" type="text" maxlength=30/></p>
	<p>Password <input name="password" type="password" maxlength=30/></p>
	<!--if someone try to login but the session is not set then display this error msg -->
	<?php
		if(isset($_POST['login']) && !isset($_SESSION['admin'])){
			?>
			<p><span class="error">Incorect username or password</span></p>
		<?php }

	 ?>
	<p><input type="submit" name="login" value="Submit"/></p>
</form>