<?php
header("content-type:application/json");
//$jsondata = file_get_contents("https://commember14.000webhostapp.com/show1.php");

//echo $jsondata

// Read JSON Decode //
    //$jsonCode = file_get_contents("https://commember14.000webhostapp.com/show1.php");
    $jsonCode = file_get_contents("https://api-blynk-line.herokuapp.com/show1.php");

	$jsonDecode = json_decode($jsonCode, true);

	foreach ($jsonDecode as $objResult)
	{
		echo $objResult["id"]." ";
		echo $objResult["temp"]." ";
		echo $objResult["humidity"]." ";
		echo $objResult["date"]." ";
	}

?>
