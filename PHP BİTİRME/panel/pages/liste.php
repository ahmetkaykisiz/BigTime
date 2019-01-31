<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	background-color: #EED2B3;
	 background-image: url("1.jpg");

    background-attachment: fixed;

    margin: 0px;
}
</style>
</head>

<body bgcolor="#E5E5E5">
<?php 
include('ustmenu.php')
?>
<p>&nbsp;</p>
<p>&nbsp;</p><
<table width="60%" height="117" border="0" align="center" cellpadding="0" cellspacing="0" style="color: #333; background-color:">
  <tr align="center" bgcolor="#E6D4D3">
    <td bgcolor="#E6D4D3"><h4>ID</h4></td>
    <td><h4>AD</h4></td>
    <td><h4>SİFRE</h4></td>
    <td><h4>SEVİYE</h4></td>
    <td><h4>ONAY</h4></td>
    <td><h4>TARİH</h4></td>
    <td><h4>Sil</h4></td>
    <td><h4>ONAYLA</h4></td>
    <td><h4>DÜZENLE</h4></td>
  </tr>
  <font color="#FFFFFF" "></font>
  <?php  include('baglan.php');
  $calistir=mysql_query("select * from giris ") or die ("Hata Oluştu");
  while ($oku=mysql_fetch_assoc($calistir))
  {
	  if($oku['onay']==1)
	  { $a="AKTİF";}
	   if($oku['onay']==0)
	  { $a="PASİF";}
  ?><tr bgcolor="#F1E6E7"> 
    <td align="center"><p><strong><?php echo $oku['id']; ?></strong></p></td>
    <td><p><strong><?php echo $oku['ad']; ?></strong></p></td>
    <td bgcolor="#F1E6E7"><p><strong><?php echo $oku['sifre']; ?></strong></p></td>
    <td><p><strong><?php echo $oku['seviye']; ?></strong></p></td>
    <td><p><strong><?php echo $a; ?></strong></p></td>
    <td><p><strong><?php echo $oku['tarih']; ?></strong></p></td>
    <td align="center"><p><strong><a href="deleteuser.php?a=<?php echo $oku['id']; ?>"><img src="../img/user_remove-512 (1).png" width="32" height="32"</></a></strong></p></td>
    <td align="center">
      <p>         <strong>
        <?php if ($oku['onay']==0 )
  {  ?>            
        <a href="onay.php?id=<?php echo $oku['id']?>&onay=0"><img src="../img/Check-icon.png" width="32" height="32" /></a>         
        <?php }
	else
	{
		?>         
        <a href="onay.php?id=<?php echo $oku['id'] ?>&onay=1"><img src="../img/Red_x_cross_uncheck_bad.png" width="32" height="32" /></a>         
        <?php } ?>                       
        <br>
    </strong></p></td>
    <td align="center"><p><strong><a href="update.php?id=<?php echo $oku['id'] ?>"><img src="../img/search_people-512.png" width="32" height="32" /></a></strong></p></td>
     
	 
  </tr>
  <?php }
  mysql_close($baglanti);
  ?>
  
</table>


</body>
</html>