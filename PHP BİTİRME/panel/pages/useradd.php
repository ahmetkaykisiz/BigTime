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
</head>

<body>
<form id="form1" name="form1" method="post" action="">
 <?php include('ustmenu.php')?>
  <p>&nbsp;</p>
  <table width="363" height="350" border="1" align="center">
    <tr>
      <td width="89">Ad</td>
      <td width="306"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" value="Adınızı Yazınız.." onfocus="if(this.beenchanged!=true){ this.value = ''}" onblur="if(this.beenchanged!=true) { this.value='Adınızı yazınız..' }" onchange="this.beenchanged = true;" /></td>
    </tr>
    <tr>
      <td>Şifre</td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" value="Şifrenizi Yazınız.." onfocus="if(this.beenchanged!=true){ this.value = ''}" onblur="if(this.beenchanged!=true) { this.value='Şifreniz...' }" onchange="this.beenchanged = true;" /></td>
    </tr>
    <tr>
      <td>Seviye</td>
      <td><label for="textfield3"></label>
        <label for="select"></label>
        <select name="select" id="select">
          <option value="0">Seçiniz</option>
          <option value="superadmin">süper admin</option>
          <option value="admin">admin</option>
          <option value="user">user</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="    Ekle   " /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php

if ($_POST)
 {
$ad=$_POST['textfield'];
$sif=$_POST['textfield2'];
$sev=$_POST['select'];
if($ad =="" or $sif=="" or $sev=="")
{
echo "Boş Gecmeyin";	
}
else
{
include('baglan.php');
 
 $calistir=mysql_query("select * from giris where ad='$ad'")or die ("Hata Oluştu!") ;
 $sayi=mysql_num_rows($calistir);
 if($sayi<>0)
 { echo "bu ad kullanılıyor"; }
	
	 else 
	  {
$ekle=mysql_query("INSERT INTO giris (ad,sifre,seviye) VALUES ('$ad','$sif','$sev')",$baglanti)or die("Hata oluştu!");
echo "Veritabanına başarı ile kaydedildi";
mysql_close($baglanti);
 }
 }
 }
 ?>