<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location:login.php");
  exit;
}

require 'functions.php';

//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


//apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
        alert('berhasil');
        document.location.href = 'index.php';
    </script>";
  } else {
    echo "gagal";
  }
}
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
  <title>ubah data mahasiswa</title>
</head>

<body style="background-color: #AB47BC;">
  <!-- <h3>form ubah data mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul style="list-style-type:none;">
      <li>

        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="nama" class="form-control" required autofocus autocomplete="off" value="<?= $m['nama']; ?>">
          <label for="form1">Nama</label>
        </div>
      </li>
      <li>

        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="nim" class="form-control" required autocomplete="off" value="<?= $m['nim']; ?>">
          <label for="form1">NIM</label>
        </div>
      </li>
      <li>

        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="jurusan" class="form-control" required autocomplete="off" value="<?= $m['jurusan']; ?>">
          <label for="form1">Jurusan</label>
        </div>
      </li>
      <li>

        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="kelas" class="form-control" required autocomplete="off" value="<?= $m['kelas']; ?>">
          <label for="form1">Kelas</label>
        </div>
      </li>
      <li>

        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="gambar" class="form-control" required autocomplete="off" value="<?= $m['gambar']; ?>">
          <label for="form1">Gambar</label>
        </div>
      </li>
      <li>
        <button type="submit" name="ubah" class="btn btn-primary">ubah data!</button>
      </li>
    </ul>
  </form> -->

  <!-- Default form register -->
  <div style="height:100px;width: 500px;text-align: center;position:center;margin-left:450px;margin-top:50px;" align="center">
    <form class="text-center border border-light p-5" action="" method="POST" style="background-color: white;box-shadow: 0 5px 15px rgba(0,0,0,.5);">
      <input type="hidden" name="id" value="<?= $m['id']; ?>">
      <p class="h4 mb-4">Form Ubah Data Mahasiswa</p>

      <!-- Nama -->
      <input type="text" name="nama" class="form-control mb-4" required autofocus autocomplete="off" value="<?= $m['nama']; ?>">
      <!-- NIM -->
      <input type="text" name="nim" class="form-control mb-4" required autocomplete="off" value="<?= $m['nim']; ?>">
      <!-- NIM -->
      <input type="text" name="jurusan" class="form-control mb-4" required autocomplete="off" value="<?= $m['jurusan']; ?>">
      <!-- NIM -->
      <input type="text" name="kelas" class="form-control mb-4" required autocomplete="off" value="<?= $m['kelas']; ?>">
      <!-- NIM -->
      <input type="text" name="gambar" class="form-control mb-4" required autocomplete="off" value="<?= $m['gambar']; ?>">
      <!-- Newsletter -->
      <div>
        <label>Pastikan Semua data anda benar</label>
      </div>
      <br>

      <!-- Sign up button -->
      <div style="display: inline-block;">
        <button type="submit" name="ubah" class="btn btn-primary">ubah data!</button>
        <a href="index.php" class="btn btn-success">Kembali</a>
      </div>
    </form>
  </div>
  <!-- Default form register -->

</body>

</html>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>