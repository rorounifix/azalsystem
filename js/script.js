$(document).ready(function(){
	$('.nav-open').click(function(){
		
		document.getElementById("mySidenav").style.width = "250px";
		// document.getElementById("main").style.marginLeft = "0";
		document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		$('tbody tr').addClass('all-disable');

	});
	
	$(".nav-close").click(function(){
		
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft= "0";
		document.body.style.backgroundColor = "white";
		$('tbody tr').removeClass('all-disable');
	});
	
	
	
	$("#tableLoad").load("po.php");
	
	$("#measurement").click(function(){
		$("#tableLoad").load("measurement.php");
		
	});
	
	$("#home").click(function(){
		$("#tableLoad").load("po.php");
	});
	
	$("#profile").click(function(){
		window.open("profile.php")
	});
	
	


	$("#sub_Measure").click(function(){
		
		var name = document.getElementById("name").value;
		var contact = document.getElementById("contact").value;
		var house = document.getElementById("houseNo").value;
		var remarks = document.getElementById("remarks").value;
		// alert("insertContacts.php?name="+name+"&contact="+contact+"&house="+house+"&remarks="+remarks+"");
		window.open("insertContacts.php?name="+name+"&contact="+contact+"&house="+house+"&remarks="+remarks+"","_self");	
		
	});
	
	
	
	
});



