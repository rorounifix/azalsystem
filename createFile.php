<?php
// create file for each measurement

function file_create($name){
	
	if(!file_exists($name)){
		mkdir("measurement/" . $name);
	}
	
}


?>