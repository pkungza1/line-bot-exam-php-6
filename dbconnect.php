<?php  
$mysqli = new mysqli("https://databases.000webhost.com/db_structure.php?server=1&db=id3115110_line_bot_php&token=177c771fb2335b060f60956b5d2ee205", "id3115110_root","kmutnb","id3115110_line_bot_php");  
/* check connection */
if ($mysqli->connect_errno) {  
    printf("Connect failed: %s\n", $mysqli->connect_error);  
    exit();  
}  
if(!$mysqli->set_charset("utf8")) {  
    printf("Error loading character set utf8: %s\n", $mysqli->error);  
    exit();  
}
