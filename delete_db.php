<?php
	//-------------------------------------------------------------
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password);
	//-------------------------------------------------------------
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error . "\n");
	} 
	echo nl2br("Connected successfully :) \n");
	//-------------------------------------------------------------
	$sql = "DROP DATABASE abcd";
	if (!($conn->query($sql) === TRUE)) {
		die("Error deleting database abcd :( " . $conn->error);
	} 
	echo nl2br("Database deleted successfully :)\n");
	mysqli_close($conn);
?>






