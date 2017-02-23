<?php
include('conn.php');
include('createFile.php');

$name = strtoupper($_GET['name']);
$contacts = strtoupper($_GET['contact']);
$house = strtoupper($_GET['house']);
$remarks = strtoupper($_GET['remarks']);

	$sql = "INSERT INTO measurement (id, name, contacts, house, remarks)
		VALUES (NULL, '".$name."', '".$contacts."', '".$house."', '".$remarks."')";
		
		
	// check the name if not exist it will created
	if ($conn->query($sql) === TRUE) {
		$reference = $conn->insert_id;
		file_create($reference); #-----------------------create dir
		xml_create($reference,$name,$contacts,$house,$remarks);	#create xml file
		
		header("refresh:.1;url=/azalpanel");
	} else{
		echo "<script>alert('Name Duplicated.. Try to Search First')</script>";
		header("refresh:.1;url=/azalpanel");
	}


$conn->close();






?>