<?php $baglanti=mysql_connect("localhost","root");
if(!$baglanti)

{die('Veritabanı bağlantısı kurulamadı: ' . mysql_error());}
mysql_query("SET NAMES  'utf8'");
mysql_select_db("database",$baglanti);
?>