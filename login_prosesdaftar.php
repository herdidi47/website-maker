<?php
require_once("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM tbl_id WHERE username = '$username'");
if(mysql_num_rows($cekuser) <> 0) {
echo "Username Sudah Terdaftar!<br/>";
echo "<a href='daftar_form.php'>Back</a>";
} else {
if(!$username || !$password) {
echo "Masih ada data yang kosong!<br/>";
echo "<a href='daftar_form.php'>Back</a>";
} else {
$simpan = mysql_query("INSERT INTO tbl_id(username, password) VALUES('$username','$password')");
if($simpan) {
echo "Pendaftaran Sukses, Silahkan <a href='home.php'>Login</a>";
} else {
echo "Proses Gagal!";
}
}
}
?>

