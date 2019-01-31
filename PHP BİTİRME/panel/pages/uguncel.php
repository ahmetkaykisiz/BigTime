<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ürün Güncelle</title>
<style type="text/css">
body {
	background-color: #EED2B3;
	 background-image: url("1.jpg");

    background-attachment: fixed;

    margin: 0px;
}
body,td,th {
	color: #FFF;
}
</style>
</head>
 <?php include("ustmenu.php");
 include("baglan.php");
 
 
 ?>
<body>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="80%" border="1" align="center">
    <tr>
    <?php  
	
	include('baglan.php');
$gelen=$_GET['id'];
  $calistir=mysql_query("select * from urun where id=$gelen ") or die ("Hata Oluştu");
  while ($oku=mysql_fetch_assoc($calistir))
  {
  
  ?>
      <td>Model</td>
      <td><input type="text" name="textfield" id="textfield" value="<?php echo $oku['model']; ?>" /></td>
      <td>Kadran Rengi</td>
      <td><input type="text" name="textfield7" id="textfield7"  value="<?php echo $oku['kadranr']; ?>"/></td>
    </tr>
    <tr>
      <td><label for="textfield">Fiyat</label></td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2"  value="<?php echo $oku['fiyat']; ?>"/></td>
      <td><label for="textfield7">Kasa</label></td>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" value="<?php echo $oku['kasa']; ?>" /></td>
    </tr>
    <tr>
      <td>Stok</td>
      <td><input type="text" name="textfield3" id="textfield3"  value="<?php echo $oku['stok']; ?>"/></td>
      <td>Kasa Yüksekliği</td>
      <td><input type="text" name="textfield9" id="textfield9"  value="<?php echo $oku['kasay']; ?>"/></td>
    </tr>
    <tr>
      <td>Kordon Tipi</td>
      <td><input type="text" name="textfield4" id="textfield4"  value="<?php echo $oku['kordont']; ?>"/></td>
      <td>Takvim</td>
      <td><input type="text" name="textfield10" id="textfield10"  value="<?php echo $oku['takvim']; ?>"/></td>
    </tr>
    <tr>
      <td>Kordon Rengi</td>
      <td><input type="text" name="textfield5" id="textfield5"  value="<?php echo $oku['kordonr']; ?>"/></td>
      <td>Su Geçirme</td>
      <td><input type="text" name="textfield11" id="textfield11"  value="<?php echo $oku['su']; ?>"/></td>
    </tr>
    <tr>
      <td>Kadran Tipi</td>
      <td><input type="text" name="textfield6" id="textfield6"  value="<?php echo $oku['kadrant']; ?>"/></td>
      <td>Tipi</td>
      <td><input type="text" name="textfield12" id="textfield12" value="<?php echo $oku['ti']; ?>" /></td>
    </tr>
    <tr>
      <td>Kronometre </td>
      <td><input type="text" name="textfield13" id="textfield13"  value="<?php echo $oku['kro']; ?>"/></td>
      <td>Resim</td>
      <td><input type="text" name="textfield14" id="textfield14" value="<?php echo $oku['resim']; ?>" /></td>
    </tr>
    <tr align="center">
      <td colspan="4"><input type="submit" name="button" id="button" value="           Güncelle           " /></td>
    <?php }?>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?php if($_POST)
{
$mod=$_POST['textfield'];
$fiyat=$_POST['textfield2'];
$stok=$_POST['textfield3'];
$kordont=$_POST['textfield4'];
$kordonr=$_POST['textfield5'];
$kadranr=$_POST['textfield7'];
$kadrant=$_POST['textfield6'];
$kro=$_POST['textfield13'];
$kasa=$_POST['textfield8'];
$kasay=$_POST['textfield9'];
$takvim=$_POST['textfield10'];
$su=$_POST['textfield11'];
$ti=$_POST['textfield12'];
$resim=$_POST['textfield14'];
$güncelle=mysql_query("update urun set model='$mod' , fiyat='$fiyat' ,stok='$stok' , kordont='$kordont',kordonr='$kordonr',kadranr='$kadranr',kro='$kro',kadrant='$kadrant',kasa='$kasa',kasay='$kasay',takvim='$takvim',su='$su',ti='$ti',resim='$resim' where id=$gelen")or die ("Hata Var");
header("location:uliste.php");
}?>