<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:baidu-pc-faster-program-jahat.php'); }
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
.style11 {
	color: #FF0000;
	font-weight: bold;
	font-size: 22px;
	font-family: "comic Sans MS";
}
.style12 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="980" height="879" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
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
    <td rowspan="4" bgcolor="#33CC99"><div align="center">Pasang Iklan Disini. Hubungi 089636046239</div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#33CC99"><div align="center">Pasang Iklan Disini. Hubungi 089636046239</div></td>
    <td height="20" bordercolor="#000000" bgcolor="#FFFF00"><div align="left" class="style9">
      <p>
        <a href="as--inggris-haramkan-internet-explorer-login.php">
        <marquee>
        <span class="style12">AS &amp; Inggris 'Haramkan' Internet Explorer</span>
      </marquee>
      </a>
      </p>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><div align="center" class="style11"> Baidu PC Faster Mengandung Program Jahat?</div></td>
  </tr>
  <tr>
    <td bgcolor="#33FFFF"><p><strong>Jakarta</strong> - Baidu PC Faster, software untuk mendongkrak   performa komputer asal China itu disinyalir memiliki aplikasi lain yang   dikenal dikenal dengan istilah Foistware.<br />
        <br />
Entah bersifat jahat   atau tidak, namun menurut Vaksincom foistware merupakan program lain   yang secara otomatis akan terinstal bersama dengan aplikasi induknya,   dalam hal ini adalah Baidu PC Faster.<br />
<br />
Froistware umumnya dibuat   untuk mendapatkan keuntungan finansial dari komputer yang terinstal, dan   umumnya dilakukan dengan cara mengganti default search engine yang   digunakan (Google, Bing atau lainnya) dengan search engine lain yang   berafiliasi dengan pembuat foistware.<br />
<br />
Selain menampilkan hasil   pencarian yang berbeda, iklan yang ditampilkan pada mesin pencari itu   juga akan dilarikan ke kantong pembuat foistware.<br />
<br />
Beberapa foistware populer adalah babylon search, delta search, <a href="http://awesomehp.com" target="_blank">awesomehp.com</a> dan terakhir adalah Baidu PC Faster yang terdeteksi oleh G Data sebagai Trojan Generic.9038304<br />
<br />
<em>Nah</em>, lalu bagaimana cara froistware tersebut masuk ke dalam komputer?<br />
<br />
Saat melakukan proses instalasi Bluestacks pengguna akan menemui sebuah   box persetujuan End User License Agreement (EULA). Di situ dituliskan   bahwa pengguna harus menginstal Baidu PC Faster jika memang ingin   melanjutkan proses instalasi.<br />
<br />
&quot;Di sinilah PC Faster menjalankan   triknya, persetujuan instalasi Baidu PC Faster disatukan dengan   persetujuan EULA,&quot; tulis keterangan Vaksincom yang diterima <strong>detikINET</strong>, Rabu (19/2/2014).<br />
<br />
Dibilang trik, karena menurut Vaksincom akan banyak sekali para   pengguna yang terkecoh. Sehingga Baidu PC Faster bisa menginstal   froistware tanpa melanggar hukum.</p>
    <p>Sumber : <a href="http://inet.detik.com/read/2014/02/19/082445/2501638/323/baidu-pc-faster-mengandung-program-jahat">http://inet.detik.com/read/2014/02/19/082445/2501638/323/baidu-pc-faster-mengandung-program-jahat</a></p>    </td>
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
