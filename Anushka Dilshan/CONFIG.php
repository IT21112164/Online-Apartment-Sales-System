<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database ="oass";
	// Create connection

	$connec = new mysqli($servername, $username, $password, $database);
	// Check connection

	if ($connec->connect_error) {
	die("CONNECTION FAILED: " . $connec->connect_error);
	}
	echo "CONNECTED SUCCESSFULLY";
?>