$(document).ready(function(){
	$('span.btn').click(function(){
		alert('test');
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById("demo").innerHTML = this.responseText
			}
		}
		xhttp.open("GET","test.txt",true)
		xhttp.send()
	});
});