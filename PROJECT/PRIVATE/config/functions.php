<?php

// FUNCTIONS
function h($string) {
	return htmlspecialchars($string);
}

function check_connection_error ($conn) {
	if ($conn->connect_errno) {
		$error = $conn->connect_errno;
		return true;
	}
	return false;
}

function form_filter ($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = h($data);
	return $data;
}



?>