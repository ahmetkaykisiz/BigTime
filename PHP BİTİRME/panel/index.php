<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Müşteri Paneli</title>
<link href="../stiller/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #EED2B3;
}
</style>
</head>

<?php  

$os=$_POST['checkbox'];
$os2=$_POST['checkbox2'];
 
$güvenlik=$_POST['textfield'];
$güv=$_POST['textfield2'];
$ad=$_POST['textfield3'];
$sif=$_POST['textfield4'];
 
 $baglanti=mysql_connect("localhost", "root" );
 if(!$baglanti)
 { die('veritabanı ile baglantı kurulamadı : ' . mysql_error());
	 }
mysql_query("SET NAMES 'utf8'");
mysql_select_db("database", $baglanti);

$calistir=mysql_query("select * from giris where onay=1") or die ("hata Oluştu!");
if ($os==1)
{setcookie("isim", $ad, time() +81400);
setcookie("sifre", $sif, time() +81400);}
if ($os2==1)
{setcookie("isim", $ad, time() -81400);
setcookie("sifre", $sif, time() -81400);}
if ($güvenlik<>$güv)
{ echo "güvenlik kodu hatalı";
	}
	 else 
	{
while($oku=mysql_fetch_assoc($calistir))
{
	if ($oku['ad']==$ad and $oku['sifre']==$sif)
	{
		session_start();
		$_SESSION['kad']=$ad;
		header("location:pages/panel.php");}
	}
	}
	
	echo "Kullanıcı adı veya şifreniz hatalı."

?>
<body>
<form id="form1" name="form1" method="post" action="">
       &nbsp;&nbsp;
        &nbsp;&nbsp;
         <table width="27%" height="86" border="0" align="center">
    <tr>
      <td width="608">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <img src="img/pan.png" width="550" height="250" /></td>
    </tr>
  </table>
  <table width="27%" height="191" border="1" align="center">
    <tr>
      <td width="145">&nbsp;</td>
      <td width="335"><input name="textfield" type="text" class="css-input" id="textfield" value="<?php echo rand(1000,9999);?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Kod Doğrula:</td>
      <td><label for="textfield">
        <input name="textfield2" type="text" class="css-input" id="textfield2" />
      </label></td>
    </tr>
    <tr>
      <td>Adınız:</td>
      <td><label for="textfield2">
        <input name="textfield3" type="text" class="css-input" id="textfield3" value="<?php echo $_COOKIE['isim']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Şifreniz:</td>
      <td><label for="textfield4"></label>
      <input name="textfield4" type="password" class="css-input" id="textfield4" value=" <?php echo $_COOKIE['sifre']; ?>" />        <label for="textfield3"></label></td>
    </tr>
    <tr align="center">
      <td colspan="2">Şifremi unuttum </td>
    </tr>
    <tr>
      <td colspan="2"><p>
          <input name="checkbox" type="checkbox" id="checkbox" value="1" />
        Beni Hatırla
        <label for="checkbox"></label>        
&nbsp; 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input name="checkbox2" type="checkbox" id="checkbox2" value="1" />
<label for="checkbox2"></label>
      Beni Unut&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
          <input name="button" type="submit" class="css-input" id="button" value="                        Giriş                     " />
      </p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
