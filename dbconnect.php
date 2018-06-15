<?php  
$mysqli = new mysqli("localhost", "root","","arduino");
$objConnect = mysqli_connect($servername,$username,$password,$dbname) or die("Error Connect to Database");
$SQL = "SELECT * FROM temp";
$objQuery = mysqli_query($objConnect,$SQL) or die ("Error Query [".$strSQL."]");
/* check connection */
if ($mysqli->connect_errno) {  
    printf("Connect failed: %s\n", $mysqli->connect_error);  
    exit();  
}  
if(!$mysqli->set_charset("utf8")) {  
    printf("Error loading character set utf8: %s\n", $mysqli->error);  
    exit();  
}
