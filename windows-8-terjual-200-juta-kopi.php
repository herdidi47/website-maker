<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:home-login.php'); }
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
    <td bordercolor="#000000" bgcolor="#FFFF00"><marquee><div align="left" class="style9 style12"><a href="as--inggris-haramkan-internet-explorer.php">AS &amp; Inggris 'Haramkan' Internet Explorer</a></div></marquee></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><div align="center" class="style11">      Microsoft Klaim Windows 8 Terjual 200 Juta Kopi</div></td>
  </tr>
  <tr>
    <td bgcolor="#33FFFF"><p><strong>Jakarta</strong> - Meski menerima banyak kritikan, namun   pengguna Windows 8 terus meningkat. Berdasarkan catatan terakhir, sistem   operasi itu sudah dipakai oleh 200 juta pengguna komputer.<br />
        <br />
        Sejak   diluncurkan Oktober 2012, Windows 8 memang mendapat respons yang sangat   beragam dari para penggunanya. Ada yang memuji karena cepat dan   memiliki fitur-fitur baru, tapi ada juga yang mencaci lantaran   tampilannya yang bikin bingung, serta tombol Start yang hilang.<br />
        <br />
        Apapun   responnya, Micosoft tetap percaya bahwa Windows 8 adalah sistem operasi   komputer terbaik mereka, dan optimistis cepat atau lambat akan diterima   oleh seluruh pengguna komputer dunia. <br />
        <br />
        Pada bulan Mei 2013 lalu   Microsoft sempat menyebutkan bahwa lisensi Windows 8 sudah terjual 100   juta lebih, dan sejak itu secara perlahan penggunannya terus bertambah.<br />
        <br />
        Seperti dikutip <strong>detikINET </strong>dari <em>ZDnet</em>,   Jumat (14/2/2014), Executive Vice President of Marketing Microsoft,   Tami Reller, menyebutkan bahwa Windows 8 kini sudah ludes lebih dari 200   juta lisensi. Dan ini dianggap pencapaian yang luar biasa.<br />
        <br />
        Meski   dianggap sukses namun penjualan Windows 8 belum bisa menandingi Windows   7. Sebagai perbandingan, dalam 12 bulan sejak diluncurkan Windows 7   mampu terjual hingga 240 juta lisensi, sementara 15 bulan Windows 8   'hanya' menorehkan 200 juta.</p>
    <p>Sumber :<a href="http://inet.detik.com/read/2014/02/14/160232/2497655/317/microsoft-klaim-windows-8-terjual-200-juta-kopi"> http://inet.detik.com/read/2014/02/14/160232/2497655/317/microsoft-klaim-windows-8-terjual-200-juta-kopi</a></p>    </td>
  </tr>
  <tr>
    <td colspan="3" class="Footer">This theme is created by <span class="Name">Herdianto Aj Deh</span>.</td>
  </tr>
  <tr>
    <td colspan="3" class="Footer"><div><input value="Log In" style="margin: 0px; padding:0px;width:auto;font-size:10px;" onclick="if(this.parentNode.parentNode.getElementsByTagName(&#39;div&#39;)[1].getElementsByTagName(&#39;div&#39;)[0].style.display != &#39;&#39;) { this.parentNode.parentNode.getElementsByTagName(&#39;div&#39;)[1].getElementsByTagName(&#39;div&#39;)[0].style.display = &#39;&#39;; this.innerText = &#39;&#39;; this.value = &#39;<b>Hide</b>&#39;; } else{ this.parentNode.parentNode.getElementsByTagName(&#39;div&#39;)[1].getElementsByTagName(&#39;div&#39;)[0].style.display = &#39;none&#39;; this.innerText = &#39;&#39;; this.value = &#39;Tampilkan&#39;; }" type="button" /></div><br><div class="alt2"><br><div style="display: none;"><br><div style="background:#000000;text-align:left;padding:10px;color:#ffffff;"><br><b><form action="login_proseslogin.php" method="post">
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
