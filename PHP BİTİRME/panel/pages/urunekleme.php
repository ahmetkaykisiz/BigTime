<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #EED2B3;
	 background-image: url("1.jpg");

    background-attachment: fixed;

    margin: 0px;
}
</style>
</head>

<body>
<p>
  <?php include('ustmenu.php');

?>
  
</p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <table width="80%" border="1" align="center">
    <tr>
      <td>Model</td>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
      <td>Kasa Tipi</td>
      <td><label for="textfield8"></label>
      <input type="text" name="textfield8" id="textfield8" /></td>
    </tr>
    <tr>
      <td>Fiyat</td>
      <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="textfield2" /></td>
      <td>Kasa Y üksekliği</td>
      <td><label for="textfield9"></label>
      <input type="text" name="textfield9" id="textfield9" /></td>
    </tr>
    <tr>
      <td>Stok</td>
      <td><label for="textfield3"></label>
      <input type="text" name="textfield3" id="textfield3" /></td>
      <td>Kadran Tipi</td>
      <td><label for="textfield10"></label>
      <input type="text" name="textfield10" id="textfield10" /></td>
    </tr>
    <tr>
      <td>Kordon Tipi</td>
      <td><label for="textfield4"></label>
      <input type="text" name="textfield4" id="textfield4" /></td>
      <td>Kadran Rengi</td>
      <td><label for="textfield11"></label>
      <input type="text" name="textfield11" id="textfield11" /></td>
    </tr>
    <tr>
      <td>Kordon Rengi</td>
      <td><label for="textfield5"></label>
      <input type="text" name="textfield5" id="textfield5" /></td>
      <td>Takvim </td>
      <td><label for="textfield12"></label>
      <input type="text" name="textfield12" id="textfield12" /></td>
    </tr>
    <tr>
      <td>Kronometre</td>
      <td><label for="textfield6"></label>
      <input type="text" name="textfield6" id="textfield6" /></td>
      <td>Su Geçirme</td>
      <td><label for="textfield13"></label>
      <input type="text" name="textfield13" id="textfield13" /></td>
    </tr>
    <tr>
      <td>Tip</td>
      <td><label for="textfield7"></label>
      <input type="text" name="textfield7" id="textfield7" /></td>
      <td>Resim</td>
      <td><label for="textfield14"></label>
      <input type="text" name="textfield14" id="textfield14" /></td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input type="submit" name="button" id="button" value="             Kaydet             " /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php if($_POST)
{
$mod=$_POST['textfield'];
$fiy=$_POST['textfield2'];
$stok=$_POST['textfield3'];
$res=$_POST['textfield14'];
$kordont=$_POST['textfield4'];
$kordonr=$_POST['textfield5'];
$kadrant=$_POST['textfield10'];
$kadranr=$_POST['textfield11'];
$kasa=$_POST['textfield8'];
$takvim=$_POST['textfield12'];
$su=$_POST['textfield13'];
$kasay=$_POST['textfield9'];
$ti=$_POST['textfield7'];
$kro=$_POST['textfield6'];
$ip=getenv("Remote_Addr");
include('baglan.php');

 $ekle=mysql_query("INSERT INTO urun (model,fiyat,stok,resim,kordont,kordonr,kadrant,kadranr,kasa,takvim,su,kasay,ti,kro,ip) VALUES ('$mod','$fiy','$stok','$res','$kordont','$kordonr','$kadrant','$kadranr','$kasa','$takvim','$su','$kasay','$ti','$kro','$ip')",$baglanti)or die("Hata oluştu1!");
 
 
echo "Veritabanına başarı ile kaydedildi";
mysql_close($baglanti);
}













?>