<?php
session_start();
if(isset($_SESSION['username']))
?>
<html>
<head>
<title>Form Pendaftaran</title>
</head>
<body>
<center>
<form action="login_prosesdaftar.php" method="post">
<table>
<tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
<tr><td>Username</td><td> : <input type="text" name="username"></td></tr>
<tr><td>Password</td><td> : <input type="password" name="password"></td></tr>
<tr><td colspan="2" align="right"><input type="submit" value="Daftar">
<input type="reset" value="Batal"></td></tr>
<tr><td colspan="2" align="center">Sudah Punya akun ? <a href="home.php"><b>Login</b></a></td></tr>
</table>
</form>
</center>
</body>
</html>