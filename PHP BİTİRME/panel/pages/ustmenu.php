<style type="text/css">
#üst {
	width: 100%;
	background-color: #FFAD33;
	height: 60px;
}
body {
	margin-left: 0px;
	margin-right: 0px;
	margin-top: 0px;
}
#yan {
	background-color: #FFAD33;
	height: 80%;
	width: 20%;
	margin-top: 0px;
	margin-right: 0px;
	padding-top: 0px;
	padding-right: 0px;
}
#yan {
	background-color: #FFAD33;
	height: 80%;
	width: 15%;
	padding-top: 0px;
	padding-right: 0px;
	margin: 0px;
	list-style-position: inside;
	left: inherit;
}
</style>
<div id="üst">
  <table width="543" height="59" border="1" align="right">
    <tr>
      <td><a href="panel.php"><img src="../img/home.png" width="32" height="32" /><strong> Anasayfa</strong></a></td>
      <td>Aktif Kullanıcı:<strong>
        <?php session_start();
	  echo $_SESSION['kad'];  
	  if($_SESSION['kad']=="")
	  {
		  header("location:pquit.php");
		  }
	  ?>
      </strong></td>
      <td><a href="pquit.php"><img src="../img/2000px-Crystal_Clear_action_exit.svg.png" width="32" height="32" /><strong>Güvenli Çıkış</strong></a></td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
