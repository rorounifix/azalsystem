<?php

$txt = strtoupper($_GET['text']);
$id = $_GET['id'];

date_default_timezone_set("Asia/Riyadh");
$date = date("M d, Y ");
$time = date("h:i:a");

if(!file_exists("measurement/".$id."/remarks.txt")){
	$f = fopen("measurement/".$id."/remarks.txt","w");
	$text = '';
	fwrite($f,$text);
	fclose($f);
	$file_data = "<a style='text-decoration:none;'><strong>$txt</strong></a><br><small style='color:blue;'>".$time." - " .$date."</small><br /><br />";
	file_put_contents("measurement/".$id."/remarks.txt", $file_data);
	header("location:profile.php?id=$id");
	// echo "File created";
}else{

	$file_data = "<a style='text-decoration:none;'><strong>$txt</strong></a><br><small style='color:blue;'>".$time." - " .$date."</small><br /><br />";
	$file_data .= "\n";
	$file_data .= file_get_contents("measurement/".$id."/remarks.txt");
	file_put_contents("measurement/".$id."/remarks.txt", $file_data);
	header("location:profile.php?id=$id");
	// echo "File created";
}


?>


