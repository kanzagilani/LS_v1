<div id="row">
		<div id="userbar">
		<?php
session_start();
 if(isset($_SESSION['signed_in'])){
 echo 'Welcome, ' . $_SESSION['user_name'] . '..';
	 	}
 	else
 	{
 		echo '<a href="signin.php">Sign in</a> or <a href="signup.php">create an account</a>.';
 	}
?>
</div>
</div>
		<div id="content">
	


