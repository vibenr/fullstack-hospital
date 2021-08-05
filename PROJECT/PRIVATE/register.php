<?php
require_once('config/connection.php');
$success = 1;

foreach ($_POST as $key => $val) {
	if ($val == '') {
		$success = 0;
	}
}



if (isset($_POST['submit'])) {

	// ERROR CATCHING
	$errors = [];

	// FORM SANITIZATION
	$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$passwd = md5(form_filter($_POST['password']));
	$passwd2 = md5(form_filter($_POST['password2']));
	if ($passwd2 != $passwd) { $success = 0; }

	// FIND IF USER IS AVAILABLE
	if ($success == 1) {
		$sql = "SELECT * FROM users WHERE email='$email' OR username='$username' LIMIT 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) { $success = 0; }
	}
	
	// STORING INTO DATABASE;
	if ($success == 1) {
		$sql = "INSERT INTO users (username, email, password)
		 		VALUES ('$username', '$email', '$passwd')";
		$success = $conn->query($sql);
	}
	
	header("Location: ../PUBLIC/index.php");

}

?>