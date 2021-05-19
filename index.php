<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <link rel="stylesheet" type= "text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="card ">
  <h1 class="card-header bg-primary text-light  mx-auto">Data Mahasiswa</h1>
  <div class="card-body">
  <a href="form_simpan.php" class="btn btn-success ">Tambah Data</a><br><br>
  <table class="table table-bordered table-striped" border="1" width="100%">
  <tr>
    <th>NPM</th>
    <th>Nama</th>
    <th>Email</th>
    <th colspan="1">Aksi</th>
  </tr>
  <?php
  // Include / load file koneksi.php
  include "koneksi.php";

  // Buat query untuk menampilkan semua data mahasiswa
  $sql = $pdo->prepare("SELECT * FROM tabelmhs");
  $sql->execute(); // Eksekusi querynya

  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['npm']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['email']."</td>";
    echo "<td><a href='proses_hapus.php?npm=".$data['npm']."' class ='btn btn-danger bg-danger text-light'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</div>
</div>

</body>
</html>