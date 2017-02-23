<?php

include("conn.php"); //import the connection

function update_info($id, $name, $contact1, $contact2, $fax, $email, $house, $address, $remarks){
	
	$xml = simplexml_load_file("measurement/$id/profile.xml"); // import the profile of the user from ID

	global $conn;
	
	$sql = "UPDATE `measurement` SET `name` = '$name', `contacts` = '$contact1', `house` = '$house', `remarks` = '$remarks' WHERE `measurement`.`id` = $id;";
	// echo $sql . "<br>";
	if($conn->query($sql) === True){
		
		$xml->name = $name;
		$xml->contact_1 = $contact1;
		$xml->contact_2 = $contact2;
		$xml->fax = $fax;
		$xml->email = $email;
		$xml->house = $house;
		$xml->address = $address;
		$xml->remarks = $remarks;
		$xml->asXML("measurement/$id/profile.xml");
		echo "<script>alert('Update Success')</script>";
		echo "<script>window.open('profile.php?id=$id','_self')</script>";
		return;
	}else{
		echo "<script>alert('Name Duplicate! Please try another name')</script>";
		echo "<script>window.open('profile.php?id=$id','_self')</script>";
		return;
		
	}
	
	
	
}

$id = strtoupper($_GET["id"]);
$name = strtoupper($_GET["name"]);
$contact1 = strtoupper($_GET["contact_1"]);
$contact2 = strtoupper($_GET["contact_2"]);
$fax = strtoupper($_GET["fax"]);
$email = strtoupper($_GET["email"]);
$house = strtoupper($_GET["house"]);
$address = strtoupper($_GET["address"]);
$remarks = strtoupper($_GET["remarks"]);
update_info($id, $name, $contact1, $contact2, $fax, $email, $house, $address, $remarks);



?>