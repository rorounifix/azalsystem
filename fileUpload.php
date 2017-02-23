<?php
$id = $_POST["id"];

$target_dir = "measurement/".$id."/file/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

$basename = pathinfo($target_file,PATHINFO_BASENAME);
$ext = pathinfo($target_file,PATHINFO_EXTENSION);



if(!file_exists($target_dir)){
	mkdir($target_dir);
}

if($_FILES['file']['name'] == true){
	$x = 0;
	while(file_exists($target_file)){
		echo "file exist $x";
		$target_file = "$target_dir$basename-$x.$ext";
		$x++;	
		}
	move_uploaded_file($_FILES["file"]["tmp_name"], strtoupper($target_file));
	header("location:profile.php?id=$id");
}
	




?>