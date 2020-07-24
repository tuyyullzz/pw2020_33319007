<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location:login.php");
  exit;
}


require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
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
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

  <title>Daftar Mahasiswa</title>

  <style>
    #tablecontent {
      text-align: center;
      vertical-align: middle;

      font-family: 'Open Sans';
    }

    #header {
      font-size: 20px;
      font-family: 'Roboto', sans-serif;
    }

    table td {
      font-size: 18px;
    }

    h3 {
      font-size: 30px;
      text-align: center;
      font-family: 'open sans';
    }



    #add:link,
    #add:visited {
      background-color: #f44336;
      color: white;
      padding: 15px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      box-shadow: rgba(0, 0, 0, 0.18) 0px 5px 11px 0px, rgba(0, 0, 0, 0.15) 0px 4px 15px 0px;

    }

    #add:hover,
    #add:active {
      background-color: red;
      box-shadow: rgba(0, 0, 0, 0.18) 0px 5px 11px 0px, rgba(0, 0, 0, 0.15) 0px 4px 15px 0px;

    }

    #divheader {
      box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 5px 0px, rgba(0, 0, 0, 0.12) 0px 2px 10px 0px;
      background-color: #AB47BC;
      height: 80px;
      padding: 20px;
      color: white;

    }

    .btn-danger {
      background-color: #D500F9;
    }
  </style>

</head>

<body>
  <div id="divheader">
    <h3><i class="fas fa-university"></i> Daftar Mahasiswa</h3>
    <form action="" method="POST" align="left" style="margin-top:-40px;">
      <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian" autocomplete="off" autofocus style="font-family:Roboto;">
      <button type="submit" name="cari" class="btn btn-secondary" style="height: 29.3056px;padding:5px 30px;margin-top:3px;"><i class="fas fa-search" style="color:white;"></i></button>
    </form>
    <a href="logout.php" class="btn btn-success" style="margin:-70px 0px 0px 1200px;">Logout</a>
  </div>
  <br>



  <p style="text-align: center;font-size:18px;"><a href="tambah.php" class="btn btn-info">Tambah Data Mahasiswa</a></p>
  <br>

  <table border="1" cellpadding="18" cellspacing="0" class="table table-hover" style="width: 1200px;box-shadow: 0 5px 15px rgba(0,0,0,.5);" align="center" id="tablecontent">
    <thead class="black white-text">
      <tr>

        <th scope="col" id="header">Gambar</th>
        <th scope="col" id="header">Nama</th>
        <th scope="col" id="header">Aksi</th>
      </tr>
    </thead>
    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p>data mahasiswa tidak ditemukan!</p>
        </td>
      </tr>

    <?php endif; ?>

    <?php foreach ($mahasiswa as $m) : ?>
      <tbody>
        <tr style="font-size: 30px;">

          <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
          <td><?= $m['nama']; ?></td>
          <td>
            <a href="detail.php?id=<?= $m['id']; ?>"><i class="fas fa-edit" style="font-size:25px;color:#AA00FF;"></i></a>
          </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
  </table>

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
<script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" integrity="sha384-3Nqiqht3ZZEO8FKj7GR1upiI385J92VwWNLj+FqHxtLYxd9l+WYpeqSOrLh0T12c" crossorigin="anonymous"></script>