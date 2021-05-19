<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <link rel="stylesheet" type= "text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="card ">
  <h1 class="card-header bg-primary text-light mx-auto " >Input Data Mahasiswa</h1>
  <div class="card-body">
  <form method="post" action="proses_simpan.php">
  <div class="form-group ">
    <label>Nomer Pokok Mahasiswa</label>
    <input type="text" name="tnpm" class ="form-control" placeholder="Input NPM anda disini" required>
    </div>
    <div class="form-group mt-3">
    <label>Nama</label>
    <input type="text" name="nama" class ="form-control" placeholder="Input Nama anda disini" required>
    </div>
    <div class="form-group mt-3">
    <label>Email</label>
    <input type="email" name="email" class ="form-control" placeholder="Input email anda disini" required>
    </div>
    <input type="submit" value="Simpan" class="btn btn-success mt-3 ">
    <a href="index.php"><input type="button" value="Batal" class="btn btn-danger mt-3"></a>
  </form>
  </div>
</div>
</body>
</html>