<?php
include("conn.php");

$po = $_GET['PO'];
$podate = $_GET['poDate'];
$lineitem = $_GET['lineItem'];
$quantity = $_GET['quantity'];
$location = $_GET['location'];
$etaDate = $_GET['eta'];
$signBy = $_GET['signBy'];

if(strlen($po) != 10 ){
	echo '<script>alert("Put the correct Order!!!")</script>';
	echo '<script>window.open("$_SERVER[`PHP_SELF`]","_self")</script>';
	
	
	return false;
}else{
	
	$sql = "INSERT INTO `purchase order` (`Purchased Order`,`Quantity`,`Line Item`,`PO Date Receive`,`Location`,`ETA Date`,`Sign By`) 
	VALUES ('".$po."','".$qty."','".$lineitem."','".$podate."','".$location."','".$eta."','".$sign."')";
	echo $sql;
	if($conn->query($sql) == True){
		
	print('<script>alert("success!!!")</script>');
		if(!file_exists("po/$po")){
		mkdir('po/'.$po);
		mkdir("po/".$po."/mdd");
		};
	
	
		 include("xmlFile.php");
		 include("createXmlItem.php");
	
		header('refresh:.1,url=/');
	
	
	}else{
			echo '<script>alert("PO already Exist!!!")</script>';
			
			include("close.php");
			#header('refresh:.1,$_SERVER[`PHP_SELF`]');
			return false;
			}
	
	
	
	
		

	
	

	
	
#	if(!$d){
#		header('location:/');
		
#	}else{


	

		
	
	

	
	
#$sql = "INSERT INTO `purchase order` (`Purchased Order`, ASN,`ASN Date`,`GCC Date`,`Line Item`,`PO Date Receive`,`ETA Date`,`End User`,`Number`,`Location`) 
#VALUES ($po,$asn,$asndate,$gccdate,$lineitem,$expiredate,$etadate,$podate,$username,$contact,$location)";


#print($po.$asn.$asndate.$gccdate.$lineitem.$expiredate.$etadate.$podate.$username.$contact.$location);




include("close.php");
header('location:/');

}

?>