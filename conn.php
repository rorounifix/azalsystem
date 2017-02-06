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

?>