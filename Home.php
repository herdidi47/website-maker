<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
if(!isset($_SESSION['username']))
require_once("connect.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-family: "comic Sans MS";
	font-weight: bold;
	color: #FF0000;
}
.style4 {font-size: small; color: #FF0000; }
.style5 {
	font-size: small;
	color: #FF0000;
	font-family: "comic Sans MS";
	font-weight: bold;
}
.style6 {
	font-family: "comic Sans MS";
	font-size: small;
	font-weight: bold;
}
.style7 {
	font-family: "comic Sans MS";
	font-weight: bold;
}
.style8 {
	font-size: small
}
.style9 {
	font-family: "comic Sans MS";
	font-size: small;
}
.style10 {font-family: "comic Sans MS"}
.style11 {
	color: #FFFFFF
}
-->
</style>
</head>

<body>
<table width="980" height="918" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="167" height="98"><img src="Images/logo.png" width="165" height="165" border="1" /></td>
    <td colspan="2"><img src="Images/web-design-clock_02.gif" width="641" height="165" border="1" /></td>
    <td width="180"><img src="Images/web-design-clock_04.gif" width="178" height="165" border="1" /></td>
  </tr>
  <tr>
    <td bgcolor="#33cc99"><div align="center"><strong>#SearchBoxWannaBe</strong></div></td>
    <td height="33" colspan="2"><ul id="MenuBar1" class="MenuBarHorizontal">
      <li>
        <div align="center" class="style1"><a href="Home.php" class="style4">Home</a> </div>
      </li>
      <li>
        <div align="center"><a href="#" class="style5">Komputer</a>
            <ul>
              <li>
                <div align="center" class="style7"><a href="Komputer-News.php" class="style8">News</a></div>
              </li>
              <li>
                <div align="center"><a href="#" class="MenuBarItemSubmenu style8 style10"><strong>Windows</strong></a>
                  <ul>
                    <li>
                      <div align="center" class="style9"><a href="#"><strong>Program</strong></a></div>
                    </li>
                    <li>
                      <div align="center" class="style9"><a href="#"><strong>Tutorial</strong></a></div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div align="center" class="style9"><a href="#"><strong>Tips &amp; Trik</strong></a></div>
              </li>
            </ul>
        </div>
      </li>
      <li>
        <div align="center"><a href="#" class="MenuBarItemSubmenu style6">Android</a>
            <ul>
              <li>
                <div align="center"><a href="#" class="style6">APK Download</a></div>
              </li>
              <li>
                <div align="center" class="style9"><a href="#"><strong>How to..</strong></a></div>
              </li>
            </ul>
        </div>
      </li>
      <li>
        <div align="center"><a href="#" class="MenuBarItemSubmenu style8 style10"><strong>Game</strong></a>
            <ul>
              <li>
                <div align="center" class="style9"><a href="#"><strong>Komputer</strong></a></div>
              </li>
              <li>
                <div align="center" class="style9"><a href="#"><strong>Android</strong></a></div>
              </li>
            </ul>
        </div>
      </li>
      <li>
    <div align="center"><a href="#" class="MenuBarItemSubmenu style6">My Profile</a>
        <ul>
          <li>
            <div align="center"><a href="#" class="style6">Facebook</a></div>
          </li>
          <li>
            <div align="center" class="style9"><a href="#"><strong>Twitter</strong></a></div>
          </li>
          <li>
            <div align="center"><a href="#" class="style6">YM!</a></div>
          </li>
        </ul>
    </div>
  </li>
</ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../../../../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../../../../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script></td>
    <td rowspan="5" bgcolor="#33CC99"><div align="center">Pasang Iklan Disini. Hubungi 089636046239</div></td>
  </tr>
  <tr>
    <td rowspan="4" bgcolor="#33CC99"><div align="center">Pasang Iklan Disini. Hubungi 089636046239</div></td>
    <td colspan="2" bgcolor="#FFFF00"><marquee><p class="Color"><a href="as--inggris-haramkan-internet-explorer.php">AS &amp; Inggris 'Haramkan' Internet Explorer</a></p></marquee></td>
  </tr>
  <tr>
    <td width="330" rowspan="2"><iframe width="320" height="250"src="http://www.youtube.com/embed/MmB9b5njVbA" frameborder="0"allowfullscreen></iframe></td>
    <td width="323" bgcolor="#0033FF"><div align="left" class="Title">Minecraft</div></td>
  </tr>
  <tr>
    <td height="238" background="Images/minecraft2.jpg" class="Color">Minecraft adalah game keluaran tim mojang yang bersifat kreatif. Mengapa kreatif? Karena game ini membebaskan pemainnya untuk membuat ataupun melakukan apapun yang ingin mereka lakukan.</td>
  </tr>
  <tr>
    <td colspan="2" background="Images/minecraft1.jpg"><p class="style11">Game ini bergenre <em>sandbox</em>, dan diciptakan oleh orang Swedia dan dimainkan oleh banyak orang. Game ini bisa dimainkan secara single player dan multiplayer(Secara LAN ataupun online). Mode pada game ini ada 3, yaitu survival, creative, dan hardcore. Pada mode survival, pemain ditantang untuk survive di alam liar. Pemain memiliki kebebasan untuk berburu, membuat peralatan, hingga mendirikan rumah. Pada mode survival ini terdapat 4 difficulty, yaitu Peaceful, Easy, Medium, dan Hard. Berikutnya adalah mode creative. Pada mode creative ini kita memiliki kebebasan untuk melakukan hal apapun yang kita inginkan. Kita memiliki semua bahan yang bisa didapat pada inventori kita secara TIDAK TERBATAS! Kita juga dapat menembus batas-batas yang terdapat pada mode survival, seperti menembus <em>bedrock</em>(Bedrock adalah sebuah batu yang pada mode survival tidak dapat dihancurkan dengan cara apapun. Yang terakhir adalah mode hardcore, mode ini mirip seperti survival, tetapi memiliki tingkat kesusahan yang lebih tinggi.</p></td>
  </tr>
  <tr>
    <td colspan="4" class="Footer">This theme is created by <span class="Name">Herdianto Aj Deh</span>.</td>
  </tr>
  <tr>
    <td height="215" colspan="4" class="Footer"><div><input value="Log In" style="margin: 0px; padding:0px;width:auto;font-size:10px;" onclick="if(this.parentNode.parentNode.getElementsByTagName(&#39;div&#39;)[1].getElementsByTagName(&#39;div&#39;)[0].style.display != &#39;&#39;) { this.parentNode.parentNode.getElementsByTagName(&#39;div&#39;)[1].getElementsByTagName(&#39;div&#39;)[0].style.display = &#39;&#39;; this.innerText = &#39;&#39;; this.value = &#39;<b>Hide</b>&#39;; } else{ this.parentNode.parentNode.getElementsByTagName(&#39;div&#39;)[1].getElementsByTagName(&#39;div&#39;)[0].style.display = &#39;none&#39;; this.innerText = &#39;&#39;; this.value = &#39;Tampilkan&#39;; }" type="button" /> 
        <a href="daftar_form.php">Daftar</a></div>
      <br><div class="alt2"><br><div style="display: none;"><br><div style="background:#000000;text-align:left;padding:10px;color:#ffffff;"><br><b><form action="login_proseslogin.php" method="post">
<table align="center">
<tr><td>Username</td><td> : <input type="text" name="username"></td></tr>
<tr><td>Password</td><td> : <input type="password" name="password"></td></tr>
<tr><td colspan="2" align="right"><input type="submit" value="Login"> <input type="reset" value="Batal"></td></tr>
</table></b><br></div><br></div><br></div>
    </form></td>
  </tr>
</table>
</body>
</html>
