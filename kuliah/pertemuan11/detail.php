<?php
require 'functions.php';


//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

//ambil id dari URL
$id = $_GET['id'];

//query mahasisswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <title>Detail Data Mahasiswa</title>
</head>

<body style="background-color: #AB47BC;">
  <!-- <ul style="list-style-type:none;">
    <li>nama : <?= $m['nama']; ?></li>
    <li>nim : <?= $m['nim']; ?></li>
    <li>jurusan : <?= $m['jurusan']; ?></li>
    <li>kelas : <?= $m['kelas']; ?></li>
    <li><img src="img/<?= $m['gambar']; ?>"></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm ('yakin??');">hapus</a></li>
    <li><a href="index.php">kembali ke daftar mahasiswa</a></li>
  </ul> -->

  <!-- Default form register -->
  <div style="height:100px;width: 500px;text-align: center;position:center;margin-left:450px;margin-top:50px;" align="center">
    <form class="text-center border border-light p-5" action="#!" style="background-color: white;box-shadow: 0 5px 15px rgba(0,0,0,.5);">

      <p class="h4 mb-4">Detail Data Mahasiswa</p>

      <!-- Nama -->
      <input type="text" class="form-control mb-4" placeholder="Nama" name="nama" autocomplete="off" autofocus required value="<?= $m['nama']; ?>" readonly>

      <!-- NIM -->
      <input type="text" class="form-control mb-4" placeholder="NIM" name="nim" autofocus autocomplete="off" required value="<?= $m['nim']; ?>" readonly>
      <!-- NIM -->
      <input type="text" class="form-control mb-4" placeholder="Jurusan" name="jurusan" autofocus autocomplete="off" required value="<?= $m['jurusan']; ?>" readonly>
      <!-- NIM -->
      <input type="text" class="form-control mb-4" placeholder="Kelas" name="kelas" autofocus autocomplete="off" required value="<?= $m['kelas']; ?>" readonly>
      <!-- NIM -->
      <input type="text" class="form-control mb-4" placeholder="Gambar" name="gambar" autofocus autocomplete="off" required value="<?= $m['gambar']; ?>" readonly>

      <!-- Newsletter -->
      <div>
        <label>Pastikan Semua data anda benar</label>
      </div>
      <br>

      <!-- Sign up button -->
      <div style="display: inline-block;">
        <a href="ubah.php?id=<?= $m['id']; ?>" class="btn btn-primary">ubah</a>
        <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm ('yakin??');" class="btn btn-danger">hapus</a>
        <a href="index.php" class="btn btn-success">Kembali</a>
      </div>
    </form>
  </div>
  <!-- Default form register -->
</body>

</html>