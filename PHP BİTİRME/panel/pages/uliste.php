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
.aw-zoom
{
    position: relative;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -moz-transform: scale(1);
    transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
    -ms-transition: all .3s ease-in;
}

.aw-zoom:hover
{
    z-index:2;
    -webkit-transform: scale(1.5);
    -ms-transform: scale(1.5);  
    -moz-transform: scale(1.5);
    transform: scale(1.5);
}

</style>
</head>
<?php 
include('ustmenu.php')
?>

 <?php  include('baglan.php');
  $calistir=mysql_query("select * from giris ") or die ("Hata Oluştu");
  
  
  ?>
<body> 
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <table width="80%" border="1" align="center">
    <tr align="center" bgcolor="#CCCCCC">
      <td width="3%"><h4>Sıra</h4></td>
      <td width="5%"><h4>Model</h4></td>
      <td width="4%"><h4>Fiyat</h4></td>
      <td width="3%"><h4>Stok</h4></td>
      <td width="7%"><h4>Kordon Tipi</h4></td>
      <td width="9%"><h4>Kordon Rengi</h4></td>
      <td width="8%"><h4>Kadran Tipi</h4></td>
      <td width="9%"><h4>Kadran Rengi</h4></td>
      <td width="4%"><h4>Kasa</h4></td>
      <td width="10%"><h4>Kasa yüksekliği</h4></td>
      <td width="5%"><h4>Takvim</h4></td>
      <td width="8%"><h4>Su Geçirme</h4></td>
      <td width="3%"><h4>Tipi</h4></td>
      <td width="8%"><h4>Kronometre</h4></td>
      <td width="14%"><h4>Resim</h4></td>
      <td width="14%">Düzenle</td>
      <td width="14%">Sil</td>
    </tr>
     <?php  include('baglan.php');
  $calistir=mysql_query("select * from urun ") or die ("Hata Oluştu");
  while ($oku=mysql_fetch_assoc($calistir))
  {
	  
  ?>
    <tr align="center" bgcolor="#FFFFFF">
      <td><strong><?php echo $oku['id']; ?></strong></td>
      <td><strong><?php echo $oku['model']; ?></strong></td>
      <td><strong><?php echo $oku['fiyat']; ?></strong></td>
      <td><strong><?php echo $oku['stok']; ?></strong></td>
      <td><strong><?php echo $oku['kordont']; ?></strong></td>
      <td><strong><?php echo $oku['kordonr']; ?></strong></td>
      <td><strong><?php echo $oku['kordont']; ?></strong></td>
      <td><strong><?php echo $oku['kadranr']; ?></strong></td>
      <td><strong><?php echo $oku['kasa']; ?></strong></td>
      <td><strong><?php echo $oku['kasay']; ?></strong></td>
      <td><strong><?php echo $oku['takvim']; ?></strong></td>
      <td><strong><?php echo $oku['su']; ?></strong></td>
      <td><strong><?php echo $oku['ti']; ?></strong></td>
      <td><strong><?php echo $oku['kro']; ?></strong></td>
      <td><strong><img class="aw-zoom" src="../urunimg/<?php echo $oku['resim']; ?>.jpg" width="125" height="125" /></strong></td>
      <td><a href="uguncel.php?id=<?php echo $oku['id'] ?>"><img src="../img/search_people-512.png" width="125" height="125" /></a></td>
      <td><a href="usil.php?id=<?php echo $oku['id'] ?>"><img src="../img/Red_x_cross_uncheck_bad.png" width="125" height="125" /></a></td>
    </tr>
    <?php }?>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>