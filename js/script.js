$(document).ready(function(){
	$('.nav-open').click(function(){
		
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
		document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

	});
	
	$(".nav-close").click(function(){
		
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft= "0";
		document.body.style.backgroundColor = "white";

	});
	
	$("#tableLoad").load("po.php");
	
	
	
	
	
});



