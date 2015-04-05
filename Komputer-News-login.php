<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:komputer-news.php'); }
else { $username = $_SESSION['username']; }
require_once("connect.php");
$query = mysql_query("SELECT * FROM tbl_id WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
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
.style11 {font-size: medium; color: #FF0000; font-family: "comic Sans MS"; font-weight: bold; }
.style20 {
	color: #000000;
	font-family: "comic Sans MS";
	font-size: small;
}
.style21 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="980" height="314" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="165" height="98"><img src="Images/logo.png" width="165" height="165" /></td>
    <td><img src="Images/web-design-clock_02.gif" width="641" height="165" /></td>
    <td width="178"><img src="Images/web-design-clock_04.gif" width="178" height="165" /></td>
  </tr>
  <tr>
    <td bgcolor="#33CC99"><div align="center"><strong>#SearchBoxWannaBe</strong></div></td>
    <td height="33"><ul id="MenuBar1" class="MenuBarHorizontal">
      <li>
        <div align="center" class="style1"><a href="Home-login.php" class="style4">Home</a> </div>
      </li>
      <li>
        <div align="center"><a href="#" class="style5">Komputer</a>
            <ul>
              <li>
                <div align="center" class="style7"><a href="Komputer-News-login.php" class="style8">News</a></div>
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
                <div align="center"><a href="#" class="style6">News</a></div>
              </li>
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
    <td rowspan="7" bgcolor="#33CC99"><div align="center">Pasang Iklan Disini. Hubungi 089636046239</div></td>
  </tr>
  <tr>
    <td rowspan="6" bgcolor="#33CC99"><div align="center">Pasang Iklan Disini. Hubungi 089636046239</div></td>
    <td bordercolor="#000000" bgcolor="#FFFF00"><marquee><span class="style21"><a href="as--inggris-haramkan-internet-explorer-login.php">AS &amp; Inggris 'Haramkan' Internet Explorer</a></span>
    </marquee></td>
  </tr>
  <tr>
    <td bgcolor="#00FFFF">      <div align="left"> 
      <p class="style11"><span class="style11"><a href="as--inggris-haramkan-internet-explorer-login.php">AS &amp; Inggris 'Haramkan' Internet Explorer</a></span></p>
      <p class="style9">Pemerintah Amerika Serikat (AS), Inggris dan Australia sepakat meminta pengguna komputer agar tidak menggunakan browser Internet Explorer untuk sementara. Untuk mengakses internet, disarankan memakai browser alternatif. <em><a href="as--inggris-haramkan-internet-explorer-login.php">Selanjutnya</a></em><a href="as--inggris-haramkan-internet-explorer.php">...</a></p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#00FF00"><p class="style11"><a href="next-gen-firewall-login.php">Next Gen Firewall, Cara Baru Menghadang Virus Komputer</a></p>
    <p class="style9">Untuk menangkal ancaman yang mengintai   pengguna komputer, selain antivirus umumnya ‘penjaga’ yang juga siaga   adalah Firewall. Namun seiring berkembangnya evolusi virus, teknologi   Firewall justru kerap <em>dikibuli</em> oleh virus saat ini. Sehingga terciptalah apa yang disebut Next Gen Firewall. <em><a href="next-gen-firewall-login.php">Selanjutnya</a></em><a href="next-gen-firewall.html">...</a></p></td>
  </tr>
  <tr>
    <td bgcolor="#FF00FF"><h1 class="style11"><a href="baidu-pc-faster-program-jahat-login.php">Baidu PC Faster Mengandung Program Jahat?</a></h1>
    <p class="style9">Baidu PC Faster, software untuk mendongkrak performa komputer asal China   itu disinyalir memiliki aplikasi lain yang dikenal dikenal dengan   istilah Foistware. <em><a href="baidu-pc-faster-program-jahat-login.php">Selanjutnya...</a></em></p></td>
  </tr>
  <tr>
    <td bgcolor="#FFFF00"><span class="style11"><p><a href="windows-8-terjual-200-juta-kopi-login.php">Microsoft Klaim Windows 8 Terjual 200 Juta Kopi</a></p>
    </span>
      <p><span class="style11">      </span><span class="style20">Meski menerima banyak kritikan, namun pengguna Windows 8 terus   meningkat. Berdasarkan catatan terakhir, sistem operasi itu sudah   dipakai oleh 200 juta pengguna komputer. <a href="windows-8-terjual-200-juta-kopi-login.php">Selanjutnya...</a></span></p></td>
  </tr>
  <tr>
    <td bgcolor="#0066ff" class="Page"><p>Halaman</p></td>
  </tr>
  <tr>
    <td colspan="3" class="Footer">This theme is created by <span class="Name">Herdianto Aj Deh</span>.</td>
  </tr>
  <tr>
    <td colspan="3" class="Footer">
<?php
echo "Selamat Datang, $username"
?>
<br>
<a href="Home-logout.php">Log Out</br>
</a></td>
  </tr>
</table>
</body>
</html>
