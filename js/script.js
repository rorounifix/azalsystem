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
	
	
	
	
	
});



