<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body bgcolor="#E5E5E5">
<?php include ('baglan.php'); 

$gelen=$_GET['id'];
$onay=$_GET['onay'];
if($onay==1)
{
	$güncel=mysql_query("update giris set onay=0 where id=$gelen") or die ("Hata var");
	}
	else
	{
		$güncel=mysql_query("update giris set onay=1 where id=$gelen") or die ("Hata var");
		}
		header("location:liste.php");
 ?>


<body>
</body>
</html>