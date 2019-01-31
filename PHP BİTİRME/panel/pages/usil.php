<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
include('ustmenu.php');
?>
<?php $ab=$_GET['id'];
include('baglan.php');
$calistir=mysql_query("delete from urun where id='$ab'") or die ("Hata Oluştu!");
header("location:uliste.php");

?>
<body>
</body>
</html>