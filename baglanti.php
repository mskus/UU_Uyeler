<?php
$sunucu = "localhost"; //sunucu
$kullanici = "root"; //veritabani kullanici adi
$parola = "12345678"; // veritabani sifresi
$veritabani = "uye";// veritabani ismi 
$baglanti = mysql_connect($sunucu, $kullanici, $parola); 

if(!$baglanti) die("MySQL sunucusuna baglanti saglanamadi!"); 

mysql_select_db($veritabani, $baglanti) or die ("Veritabanina baglanti saglanamadi!");
?>