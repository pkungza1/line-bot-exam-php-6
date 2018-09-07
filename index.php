<?php
//กำหนดเวลาเตั้งค่าเวลาเป็นเวลาของกรุงเทพ
 date_default_timezone_set('Asia/Bangkok');

$now = new DateTime();

//ตรวจสอบว่ามีค่าเก็บไว้ในตัวเเปรรึป่าว หรือเช็คว่ามีค่าจากเซ็นเซอร์ส่งมาเก็บไว้ในตัวเเปรรึป่าว
error_reporting(~E_NOTICE );
//เก็บค่าอุุณหภูมไว้ในตัวเเปร temp เเละเก็บค่าความชื้นไว้ในตัวเเปร humidity
$temp = $_REQUEST['temp'];
$humidity = $_REQUEST['humidity'];
//เชื่อมต่อlocalhost
$mysqli = new mysqli('localhost', 'id6206174_root', "4ko6r'LN", 'id6206174_arduino');
//หรือ $mysqli = mysqli_connect('localhost', 'root', 'password', 'default_db_name');

if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
    exit;
}
//กำหนดรูปเวลาให้อยู่ในรูปเเบบ ปี/เดือน/วัน ชั่วโมง/นาที/วินาที
 $datenow = $now->format("Y-m-d H:i:s");
 $hvalue = $value;	
//ตรวจสอบว่าค่าที่เพิ่ม ถูกส่งไปยังฐานข้อมูลสำเร็จหรือไม่
 $result = $mysqli->query("INSERT INTO `temp`(id,temp,humidity,date) VALUES (null,$temp,$humidity,'$datenow')");
 if ($result){
     echo "<h1 align=center>ส่งข้อมูลสำเร็จ</h1>";
}else if(!$result){
 	 die('Invalid query: ' . mysqli_error($mysqli));
 mysqli_close($mysqli);
}
?>
