<?php
session_start();
require_once("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM tbl_id WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "Username Tidak Terdaftar!<br/>";
echo "<a href='login_form.php'>Back</a>";
} else {
if($password <> $hasil['password']) {
echo "Password Salah!<br/>";
echo "<a href='login_form.php'>Back</a>";
} else {
$_SESSION['username'] = $hasil['username'];
header('location:as--inggris-haramkan-internet-explorer-login.php');
}
}
?>
