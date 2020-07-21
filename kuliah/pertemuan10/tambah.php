<?php
require 'functions.php';

//apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
        alert('berhasil');
        document.location.href = 'latihan3.php';
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

<body>
  <h3>form tambah data mahasiswa</h3>
  <form action="" method="POST">
    <ul style="list-style-type:none;">
      <li>
        <!-- Material input -->
        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="nama" class="form-control" required autofocus autocomplete="off">
          <label for="form1">Nama</label>
        </div>
      </li>
      <li>
        <!-- Material input -->
        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="nim" class="form-control" required autocomplete="off">
          <label for="form1">NIM</label>
        </div>
      </li>
      <li>
        <!-- Material input -->
        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="jurusan" class="form-control" required autocomplete="off">
          <label for="form1">Jurusan</label>
        </div>
      </li>
      <li>
        <!-- Material input -->
        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="kelas" class="form-control" required autocomplete="off">
          <label for="form1">Kelas</label>
        </div>
      </li>
      <li>
        <!-- Material input -->
        <div class="md-form" style="width: 400px;">
          <input type="text" id="form1" name="gambar" class="form-control" required autocomplete="off">
          <label for="form1">Gambar</label>
        </div>
      </li>
      <li>
        <button type="submit" name="tambah" class="btn btn-primary">tambah data!</button>
      </li>
    </ul>
  </form>
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