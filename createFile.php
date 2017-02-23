<?php
// create file directory for each measurement

function file_create($id){
	
	if(!file_exists("measurement/" .$id)){
		mkdir("measurement/" . $id);
	}
	return true;
}


// create xml file for profile

function xml_create($reference,$name,$contact,$house,$remarks){
	
	if(file_exists("measurement/".$reference)){
		$myfile = fopen("measurement/".$reference."/profile.xml", "w+") or die("Unable to open file!");
		$txt = '<?xml version="1.0" encoding="UTF-8"?>
		<profile>
			<reference>'.$reference.'</reference>
			<name>'.$name.'</name>
			<contact>'.$contact.'</contact>
			<contact2></contact2>
			<fax>dd</fax>
			<email></email>
			<house>'.$house.'</house>
			<address></address>
			<remarks>'.$remarks.'</remarks>
		</profile>
		';
		fwrite($myfile, $txt);
		fclose($myfile);
		// echo "profile created name :" . $name;
	}
	return true;
	
}

// create  remarks

function remarks(){
	
	
}

?>