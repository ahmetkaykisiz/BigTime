<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #EED2B3;
}
</style>
<?php include("ustmenu.php");?>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="80%" border="1" align="center">
    <tr align="center" bgcolor="#E6D4D3">
      <td><h4><strong>İD</strong></h4></td>
      <td><h4><strong>AD</strong></h4></td>
      <td><h4><strong>SİFRE</strong></h4></td>
      <td><h4><strong>SEVİYE</strong></h4></td>
      <td><h4><strong>ONAY</strong></h4></td>
    </tr>
    <?php  
	
	include('baglan.php');
$gelen=$_GET['id'];
  $calistir=mysql_query("select * from giris where id=$gelen ") or die ("Hata Oluştu");
  while ($oku=mysql_fetch_assoc($calistir))
  {
  
  ?>
    <tr bgcolor="#F1E6E7">
      <td>
        <strong>
      <input type="text" name="textfield" id="textfield" value="<?php echo $oku['id']; ?>" />
      </strong></td>
      <td>
        <strong>
      <input type="text" name="textfield2" id="textfield2"  value="<?php echo $oku['ad']; ?>"/>
      </strong></td>
      <td>
        <strong>
      <input type="text" name="textfield3" id="textfield3"  value="<?php echo $oku['sifre']; ?>"/>
      </strong></td>
      <td>
        <strong>
      <input type="text" name="textfield4" id="textfield4" value="<?php echo $oku['seviye']; ?>" />
      </strong></td>
      <td>
        <strong>
      <input type="text" name="textfield5" id="textfield5" value="<?php echo $oku['onay']; ?>" />
      </strong></td>
    </tr>
    <?php }?>
  </table>
  <p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="submit" name="button" id="button" value="        Güncelle      " />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>


<?php 
if($_POST)
{
$id=$_POST['textfield'];
$ad=$_POST['textfield2'];
$sifre=$_POST['textfield3'];
$sev=$_POST['textfield4'];
$onay=$_POST['textfield5'];
$güncelle=mysql_query("update giris set ad='$ad' , sifre='$sifre' ,seviye='$sev' , onay='$onay' where id=$gelen")or die ("Hata Var");
header("location:liste.php");
}

?>





