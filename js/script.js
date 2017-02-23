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
	
	
	
	$("#tableLoad").load("measurement.php");
	
	$("#measurement").click(function(){
		// alert("test")
		// $("#homeSearch").attr("id","measurementSearch")
		$("#searchbtn").addClass("searchBtn")
		$("#tableLoad").load("measurement.php")
		
		$("#searchbtn").removeClass("disabled")
		
		

	});
	
	$("#home").click(function(){
		$("#tableLoad").load("po.php");
		$("#searchbtn").addClass("disabled")
		$("#searchbtn").removeClass("searchBtn")
		// $("#measurementSearch").attr("id","homeSearch")
		
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
	
	
	$("#btn-chats").click(function(){
		var txt = document.getElementById("btn-input").value;
		var id = document.getElementById("id").value;
		
		if(txt.length == 0){
			alert("Put some remarks here !!!")
		}else{
			window.open("remarks.php?text="+txt+"&id="+id+"","_self")
		}
	
	});
		
	$("#close").click(function(){
		window.close()
	});
	
	$("#updateProfile").click(function(){
		var id = document.getElementById("id").value;
		var name = document.getElementById("name").value;
		var contact_1 = document.getElementById("contact_1").value;
		var contact_2 = document.getElementById("contact_2").value;
		var fax = document.getElementById("fax").value;
		var email = document.getElementById("email").value;
		var house = document.getElementById("house").value;
		var address = document.getElementById("address").value;
		var remarks = document.getElementById("remarks").value;
		window.open("updateProfileInfo.php?id="+id+"&name="+name+"&contact_1="+contact_1+"&contact_2="+contact_2+"&fax="+fax+"&email="+email+"&house="+house+"&address="+address+"&remarks="+remarks+"","_self")
		// alert("updateProfileInfo.php?id="+id+"&name="+name+"&contact_1="+contact_1+"&contact_2="+contact_2+"&fax="+fax+"&email="+email+"&house="+house+"&address="+address+"&remarks="+remarks+"")
	});
		
	$("#fileSearchSubmit").click(function(){
		var file = document.getElementById("fileSeach").value;
		var id = document.getElementById("id").value;
		$("#file").load("findDir.php?id="+id+"&file="+file);
		
	});
	
	// measurement search
	
	$(".searchBtn").click(function(){
		// alert("test")
		var search = document.getElementById("searchInput").value;
		$("#tableLoad").load("searchMeasurement.php?search="+search);
		});
	
	
	// note search
	$("#noteSearchSubmit").click(function(){
		
		var id = document.getElementById("id").value;
		var s = document.getElementById("noteSearch").value;
		// alert(id+s);
		$("#note").load("searchNote.php?id="+id+"&search="+s);
		
	});
	
	
	
	
});



