<?php
include('conn.php');
include('createFile.php');

$name = $_GET['name'];
$contacts = $_GET['contact'];
$house = $_GET['house'];
$remarks = $_GET['remarks'];



	
	$sql = "INSERT INTO measurement (id, name, contacts, house, remarks)
		VALUES (NULL, '".$name."', '".$contacts."', '".$house."', '".$remarks."')";
	
	if ($conn->query($sql) === TRUE) {
		file_create($name);
		echo "<script>alert('Add Success')</script>";
		header("refresh:.1;url=/azalpanel");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}


$conn->close();






?>