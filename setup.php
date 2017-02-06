<?php

include("conn.php");


// check database if exist
if($mydb == false){
	
	$sql = "CREATE DATABASE myDB";
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . $conn->error;
	}

	$conn->close();
	
	return true;
};
	

if($table == false){
	// check table if exist
	$sql = "CREATE TABLE MyGuests (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
		)";
		
	if ($conn->query($sql) === TRUE) {
			echo "Table MyGuests created successfully";
		} else {
			echo "Error creating table: " . $conn->error;
		}

		$conn->close();
		
}



?>