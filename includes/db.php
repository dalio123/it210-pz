<?php
	// konekcija sa bazom
	$dbServerName = "127.0.0.1";
	$user = "root";
	$pass = "";
	$dbName = "pz";

	$conn = mysqli_connect($dbServerName, $user, $pass, $dbName);

	if (mysqli_connect_errno()) {
		echo "not connected";
	    die("Connection failed: ");
	}
?>

