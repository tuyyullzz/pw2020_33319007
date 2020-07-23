<?php
require 'functions.php';



//apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
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
  <title>form tambah data mahasiswa</title>
</head>

<body style="background-color: #AB47BC;">
  <!-- <form action="" method="POST">
    <ul style="list-style-type:none;">
      <li>
        <div class="input-group mb-3" style="width: 500px;">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nama">
        </div>
      </li>
      <li>
        <div class="input-group mb-3" style="width: 500px;">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">NIM</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nim">
        </div>
      </li>
      <li>
        <div class="input-group mb-3" style="width: 500px;">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Jurusan</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="jurusan">
        </div>
      </li>
      <li>
        <div class="input-group mb-3" style="width: 500px;">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Kelas</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Kelas">
        </div>
      </li>
      <li>
        <div class="input-group mb-3" style="width: 500px;">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Gambar</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="gambar">
        </div>
      </li>

      <div style="display:inline-block;" vertical-align: middle;">
        <button type="submit" name="tambah" class="btn btn-primary">tambah data!</button>
        <a href="tambah.php" class="btn btn-info">Tambah Data Mahasiswa</a>
      </div>

    </ul>
  </form> -->

  <!-- Default form register -->
  <div style="height:100px;width: 500px;text-align: center;position:center;margin-left:450px;margin-top:50px; " align="center">
    <form class="text-center border border-light p-5" action="#!" style="background-color: white;box-shadow: 0 5px 15px rgba(0,0,0,.5);">

      <p class="h4 mb-4">Form Tambah Data Mahasiswa</p>

      <!-- Nama -->
      <input type="text" class="form-control mb-4" placeholder="Nama" name="nama" autocomplete="off" autofocus required>

      <!-- NIM -->
      <input type="text" class="form-control mb-4" placeholder="NIM" name="nim" autofocus autocomplete="off" required>
      <!-- NIM -->
      <input type="text" class="form-control mb-4" placeholder="Jurusan" name="jurusan" autofocus autocomplete="off" required>
      <!-- NIM -->
      <input type="text" class="form-control mb-4" placeholder="Kelas" name="kelas" autofocus autocomplete="off" required>
      <!-- NIM -->
      <input type="text" class="form-control mb-4" placeholder="Gambar" name="gambar" autofocus autocomplete="off" required>

      <!-- Newsletter -->
      <div>
        <label>Pastikan Semua data anda benar</label>
      </div>
      <br>

      <!-- Sign up button -->
      <div style="display: inline-block;">
        <button class="btn btn-success" type="submit">Tambahkan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
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