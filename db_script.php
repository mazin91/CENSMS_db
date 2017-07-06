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
	$sql = "CREATE DATABASE IF NOT EXISTS abcd";
	if (!($conn->query($sql) === TRUE)) {
		die("Error creating database: " . $conn->error);
	} 
	echo nl2br("Database created successfully :)\n");
	$conn = new mysqli($servername, $username, $password, "abcd");
	//-------------------------------------------------------------
	$sql = "CREATE TABLE fac_staff (
		id 			INT(200) 		AUTO_INCREMENT PRIMARY KEY NOT NULL, 
		name 		VARCHAR(500) 	NOT NULL,
		position 	VARCHAR(500) 	NOT NULL,
		type 		VARCHAR(500) 	NOT NULL,
		fac 		VARCHAR(200) 	NOT NULL,
		dept		VARCHAR(500),
		email		VARCHAR(500),
		phone		VARCHAR(200),
		mobile		VARCHAR(200),
		office		VARCHAR(500) 	NOT NULL,
		comments	TEXT,
		time_stamp	DATETIME 	 	NOT NULL
	)";
	if (!($conn->query($sql) === TRUE)) {
		die("\nError creating table fac_staff :(\n" . $conn->error);
	}
	echo nl2br("\nTable fac_staff created successfully :)\n");
	//-------------------------------------------------------------
	$sql = "CREATE TABLE software (
		id 				INT(200) 	 AUTO_INCREMENT PRIMARY KEY NOT NULL, 
		name 			VARCHAR(500) NOT NULL,
		version 		VARCHAR(500),
		products		TEXT,
		lic_type		VARCHAR(500),
		lic_server_port	VARCHAR(500),
		num_lic			VARCHAR(500),
		fac_id			VARCHAR(200),
		vend_id			VARCHAR(200),
		files 			VARCHAR(5000) NOT NULL,
		comments		TEXT,
		time_stamp		DATETIME NOT NULL
	)";
	if (!($conn->query($sql) === TRUE)) {
		die("Error creating table software :(\n" . $conn->error);
	}
	echo nl2br("Table software created successfully :)\n");
	//-------------------------------------------------------------
	$sql = "CREATE TABLE sw_operations (
		op_id 			INT(200) 	 AUTO_INCREMENT PRIMARY KEY NOT NULL, 
		sw_id 			INT(200) 	 NOT NULL,
		R_num 			VARCHAR(200) NOT NULL,
		P_num 			VARCHAR(200) NOT NULL,
		amount 			VARCHAR(200) NOT NULL,
		new_sw 			VARCHAR(1)	 NOT NULL,
		order_date		DATE 		 NOT NULL,
		received		VARCHAR(1) 	 NOT NULL,
		rec_date		DATE 		 NOT NULL,
		lic_str_date	DATE		 NOT NULL,
		lic_exp_date	DATE 		 NOT NULL,
		op_comments		TEXT 		 NOT NULL,
		time_stamp		DATETIME 	 NOT NULL
	)";
	if (!($conn->query($sql) === TRUE)) {
		die("Error creating table sw_operations :(\n" . $conn->error);
	}
	echo nl2br("Table sw_operations created successfully :)\n");
	//-------------------------------------------------------------
	$sql = "CREATE TABLE users (
		id 			INT(200) 	 AUTO_INCREMENT PRIMARY KEY NOT NULL, 
		user_fname	VARCHAR(500) NOT NULL,
		fac_id		VARCHAR(200) NOT NULL,
		user_name	VARCHAR(500) NOT NULL,
		user_pass	VARCHAR(500) NOT NULL,
		user_priv	VARCHAR(1),
		time_stamp	DATETIME 	 NOT NULL
	)";
	if (!($conn->query($sql) === TRUE)) {
		die("Error creating table users :(\n" . $conn->error);
	}
	echo nl2br("Table users created successfully :)\n");
	//-------------------------------------------------------------
	$sql = "CREATE TABLE variables (
		row 				INT(200) 	 AUTO_INCREMENT PRIMARY KEY NOT NULL, 
		a_dean_name			VARCHAR(200) NOT NULL,	
		a_dean_email		VARCHAR(200) NOT NULL,
		ad_assis_name		VARCHAR(200) NOT NULL,
		ad_assis_email		VARCHAR(200) NOT NULL,
		rec_email			VARCHAR(200) NOT NULL,
		purch_auto_email	TEXT		 NOT NULL,
		renew_auto_email	TEXT 		 NOT NULL,
		deliv_auto_email	TEXT 		 NOT NULL,
		time_stamp			DATETIME 	 NOT NULL
	)";
	if (!($conn->query($sql) === TRUE)) {
		die("Error creating table variables :(\n" . $conn->error);
	}
	echo nl2br("Table variables created successfully :)\n");
	//-------------------------------------------------------------
	$sql = "CREATE TABLE vendors (
		id 			INT(200) 	 AUTO_INCREMENT PRIMARY KEY NOT NULL, 
		name		VARCHAR(500) NOT NULL,
		address		VARCHAR(500),
		email		VARCHAR(500),
		phone		VARCHAR(500),
		sp_contact	VARCHAR(500),
		comments	TEXT,
		time_stamp	DATETIME	 NOT NULL
	)";
	if (!($conn->query($sql) === TRUE)) {
		die("Error creating table vendors :(\n" . $conn->error);
	}
	echo nl2br("Table vendors created successfully :)\n");
	//-------------------------------------------------------------
	mysqli_close($conn);
?>






