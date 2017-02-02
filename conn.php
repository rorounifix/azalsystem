<?php
$servername="localhost";
$username="root";
$password="";
$mydb='mydb';

//Create Connection
$conn= new mysqli($servername,$username,$password,$mydb);

//Check Connection
if ($conn -> connect_error){
	die("Connection Failed :" . $conn -> connect_error);
	}
	
#$sql = "INSERT INTO `purchase order` (`Purchased Order`, ASN,`ASN Date`,`GCC Date`,`Line Item`,`PO Date Receive`,`ETA Date`,`End User`,`Number`,`Location`) 
#VALUES (12312, 123123, 2016-09-01, 2016-09-01, 1232131, '', '', '', '', '')";


#if ($conn->query($sql) === TRUE){
#	echo("success");
	
#}else{
#	echo("failed" . $sql . "<br>" . $conn->error);
	
#};

#$conn->close();

#secho("tests");
?>