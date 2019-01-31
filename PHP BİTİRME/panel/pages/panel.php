<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #054948;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	 background-image: url("1.jpg");

    background-attachment: fixed;

    margin: 0px;
	
}
</style>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('../img/add_friend2.png','../img/change-5122.png','../img/search_people-512.png','../img/user_remove-51222.png','../img/home.png')">
<form id="form1" name="form1" method="post" action="">
</p>
<?php include('ustmenu.php')?>

  <p>&nbsp;</p>
  <table width="965" height="90" border="1" align="center">
    <tr>
      <td><a href="useradd.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../img/add_friend2.png',1)"><img src="../img/add_friend-512.png" name="Image1" width="256" height="256" border="0" id="Image1" /></a></td>
      <td><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','../img/user_remove-51222.png',1)"><img src="../img/user_remove-512 (1).png" name="Image5" width="256" height="256" border="0" id="Image5" /></a></td>
      <td><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','../img/change-5122.png',1)"><img src="../img/change-512.png" name="Image3" width="256" height="256" border="0" id="Image3" /></a></td>
      <td><a href="liste.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','../img/search_people-512.png',1)"><img src="../img/search_people-2.png" name="Image4" width="256" height="256" border="0" id="Image4" /></a></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p>
      <p><a href="urunekleme.php"><img src="../img/ekle.png" width="256" height="256" border="0" /></a></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
      <td><img src="../urunimg/1.jpg" width="256" height="256" /></td>
      <td><img src="../urunimg/3.jpg" width="256" height="256" /></td>
      <td><a href="uliste.php"><img src="../urunimg/4.jpg" width="256" height="256" /></a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>


