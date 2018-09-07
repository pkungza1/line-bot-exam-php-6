<html>
    <head>
        <title>Show_DB</title>
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
        <tr>
			<td><div align="center">
				<?php
					$result = mysql_query("SELECT id FROM temp ORDER BY id DESC LIMIT 1;");
					$row = mysql_fetch_array($result);
					echo $row["id"];

					//$myArr = array($objResult["id"], $objResult["temp"], $objResult["humidity"], $objResult["date"]);
					//$myJSON = json_encode($myArr);
					//echo $myJSON;
				?>
			</div></td>
			<td align="center">
				<?php
					$result = mysql_query("SELECT temp FROM temp ORDER BY id DESC LIMIT 1;");
					$row = mysql_fetch_array($result);
					echo $row["temp"];

					//$myArr = array($objResult["id"], $objResult["temp"], $objResult["humidity"], $objResult["date"]);
					//$myJSON = json_encode($myArr);
					//echo $myJSON;
				?>
			</td>			<td align="center">
				<?php
					$result = mysql_query("SELECT Humidity FROM temp ORDER BY id DESC LIMIT 1;");
					$row = mysql_fetch_array($result);
					echo $row["Humidity"];

					//$myArr = array($objResult["id"], $objResult["temp"], $objResult["humidity"], $objResult["date"]);
					//$myJSON = json_encode($myArr);
					//echo $myJSON;
				?>
			</td>
						<td align="center">
				<?php
					$result = mysql_query("SELECT DATE FROM temp ORDER BY id DESC LIMIT 1;");
					$row = mysql_fetch_array($result);
					echo $row["DATE"];

					//$myArr = array($objResult["id"], $objResult["temp"], $objResult["humidity"], $objResult["date"]);
					//$myJSON = json_encode($myArr);
					//echo $myJSON;
				?>
			</td>
    </body>
</html>