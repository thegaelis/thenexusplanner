<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$email		= $_POST['email'];
	$password	= md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE Email = '$email' AND Password = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		if (isset($_POST['remember'])) {	// check if null
			setcookie('email', $email, time() + 86400);	// 24 hours
		}

		$row = $result->fetch_assoc();
		$_SESSION['userid'] = $row['UserID'];
		$_SESSION['email'] = $row['Email'];
		$_SESSION['hashedpassword'] = strval($row['Password']);	// CONVERT TO STRING
		$_SESSION['username'] = $row['UserName'];
		$_SESSION['fullname'] = $row['FullName'];
		$_SESSION['position'] = $row['Position'];
		$_SESSION['datejoined'] = $row['JoinDate'];

		redirect("Panel.php");
		exit;
	} else {
		set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Wrong username or password.</p></div>');
	}
}
?>
