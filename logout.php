<?php include("includes/init.php");
	// Clear session variables
	//$_SESSION = array();

	// Destroy the session
	session_destroy();

	if(isset($_COOKIE['email'])) {
		unset($_COOKIE['email']);

		setcookie('email', '', time()-86400);
	}

	redirect("index.php");

?>