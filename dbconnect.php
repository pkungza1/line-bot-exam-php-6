<?php
	header("content-type:application/json");
	$jsondata= file_get_contents("https://commember14.000webhostapp.com/show1.php");
	echo $jsondata
?>
