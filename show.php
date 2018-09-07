<html>
<head>
<title>kitti</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","id6206174_root","4ko6r'LN") or die("Error Connect to Database");
$objDB = mysql_select_db("id6206174_arduino");
$strSQL = "SELECT * FROM temp";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1" align="center">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="98"> <div align="center">TEMP </div></th>
 <th width="98"> <div align="center">Humidity </div></th>
    <th width="198"> <div align="center">DATE </div></th>
  
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["id"];?></div></td>
    <td align="center"><?php echo $objResult["temp"];?></td>
 <td align="center"><?php echo $objResult["humidity"];?></td>
    <td align="center"><?php echo $objResult["date"];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>