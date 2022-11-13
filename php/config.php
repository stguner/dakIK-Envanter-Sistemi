<?php
$conn = new PDO("mysql:host=localhost:3306;dbname=envantertestleri", "envantertestleri", "r7_26sp6Y");
$conn->exec("SET NAMES UTF8");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Local DB connection
// try {

// 	$conn=new PDO("mysql:host=localhost;dbname=titizagrogrup;charset=utf8",'root','');
//     $conn->exec("SET NAMES UTF8");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	//echo "veritabanı bağlantısı başarılı";
// }

// catch (PDOExpception $e) {

// 	echo $e->getMessage();
// }

// date_default_timezone_set('Europe/Istanbul');


?>