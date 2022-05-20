<?php
include "koneksi.php";
$id = $_POST['user_name'];
$nama = $_POST['nama'];
$pass = md5($_POST['pass']);
$email = $_POST['email'];
$simpan = mysqli_query($koneksi,"INSERT INTO profil (user_name,nama,email,pass) VALUES ('$id','$nama','$email','$pass')");
 
if ($simpan) {
  echo "Data Berhasil Disimpan <a href='index.php'>Login</a>";
 
  exit;
}else {
  echo "Gagal menyimpan data";
  exit;
}
?>