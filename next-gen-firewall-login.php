<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:next-gen-firewall.php'); }
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
    <td rowspan="4" bgcolor="#33CC99"><div align="center">Pasang Iklan Disini. Hubungi 089636046239</div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#33CC99"><div align="center">Pasang Iklan Disini. Hubungi 089636046239</div></td>
    <td bordercolor="#000000" bgcolor="#FFFF00"><marquee><div align="left" class="style9 style12"><a href="as--inggris-haramkan-internet-explorer-login.php">AS &amp; Inggris 'Haramkan' Internet Explorer</a></div>
    </marquee></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><div align="center" class="style11">Next Gen Firewall, Cara Baru Menghadang Virus Komputer</div></td>
  </tr>
  <tr>
    <td bgcolor="#33FFFF"><p><strong>Jakarta</strong> - Untuk menangkal ancaman yang mengintai   pengguna komputer, selain antivirus umumnya ‘penjaga’ yang juga siaga   adalah Firewall. Namun seiring berkembangnya evolusi virus, teknologi   Firewall justru kerap <em>dikibuli</em> oleh virus saat ini. Sehingga terciptalah apa yang disebut Next Gen Firewall.<br />
        <br />
      Pada   dasarnya Next Gen Firewall memiliki prinsip kerja yang sama dengan   Firewall konvensional. Namun bila Firewall konvensional lebih terfokus   pada identifikasi ancaman yang melewati port dan protocol yang telah   ditentukan, Next Gen Firewall lebih kompleks karena juga mendeteksi   aplikasi ID, user ID, dan conten ID yang telah didaftarkan.<br />
      <br />
      Diterangkan   oleh Pudja U. Kartiman, Country Director Palo Alto Networks, pada   banyak kasus saat ini, virus kerap mengakali port dan protocol yang   terpantau Firewall dengan menumpang pada aplikasi yang telah terdaftar.   Praktis, Firewall pun tak mampu mengidentifikasi virus yang melaluinya.<br />
      <br />
      Celah   inilah yang diperbaiki pada Next Gen Firewall. Ruang gerak virus dibuat   semakin sempit lewat identifikasi aplikasi ID, user ID, dan konten ID   yang lebih kompleks. Dengan begitu entitas yang melewati port dan   protocol yang dibolehkan bisa lebih spesifik.<br />
      <br />
      “Bisa dibilang Next   Gen Firewall itu justru tidak mengikuti aturan firewall konvensional   yang hanya mengidentifikasi port dan protocol yang terdaftar, namun   lebih baik karena mampu mengidentifikasi aplikasi ID, user ID, dan   konten ID. Membuatnya lebih spesifik dalam memperbolehkan entitas yang   melewatinya,” ujar petinggi Palo Alto Networks Indonesia ini di Hotel   Intercontinental, Jakarta.<br />
      <br />
      Palo Alto Networks sendiri adalah   salah satu produsen yang menyodorkan solusi ini. Menggandeng Ingram   Micro untuk mendistribusikannya di Indonesia, produsen yang berpusat di   California, AS ini juga menonjolkan fitur bernama Wildfire yang mampu   mendeteksi ‘pergerakan’ asing sebuah entitas.<br />
      <br />
      Menariknya, bila   akhirnya ‘pergerakan’ tersebut diidentifikasi sebagai ancaman, fitur ini   akan secara otomatis memperbaharui database pengenalan virus yang   dimilikinya. Sehingga bila mengenali ancaman serupa, eksekusi akan   langsung dilakukan.<br />
      <br />
    Fitur menarik lain yang dimilikinya adalah global protect. Berkat fitur ini penggunaan BYOD (<em>Bring Your Own Device</em>)   di kalangan korporasi diyakini bakal lebih aman karena ID seperti   email, aplikasi ID, dan yang lainnya yang terinstal pada perangkat harus   didaftarkan lebih dulu melalui fitur tersebut.</p>
    <p>Sumber : <a href="http://inet.detik.com/read/2014/02/20/133209/2503417/323/next-gen-firewall-cara-baru-menghadang-virus-komputer">http://inet.detik.com/read/2014/02/20/133209/2503417/323/next-gen-firewall-cara-baru-menghadang-virus-komputer</a></p></td>
  </tr>
  <tr>
    <td colspan="3" class="Footer">This theme is created by <span class="Name">Herdianto Aj Deh</span>.</td>
  </tr>
  <tr>
    <td colspan="3" class="Footer"><?php
echo "Selamat Datang, $username"
?>
<br>
<a href="Home-logout.php">Log Out</br>
</a></td>
  </tr>
</table>
</body>
</html>
