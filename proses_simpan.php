<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nis = $_POST['npm'];
$nama = $_POST['nama'];
$email = $_POST['email'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO tabelmhs(npm, nama, email) VALUES(:npm,:nama,:email)");
$sql->bindParam(':npm', $npm);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':email', $email);
$sql->execute(); // Eksekusi query insert

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>