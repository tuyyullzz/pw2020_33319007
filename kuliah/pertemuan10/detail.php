<?php
require 'functions.php';

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
  <title>Document</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li>nama : <?= $m['nama']; ?></li>
    <li>nim : <?= $m['nim']; ?></li>
    <li>jurusan : <?= $m['jurusan']; ?></li>
    <li>kelas : <?= $m['kelas']; ?></li>
    <li><img src="img/<?= $m['gambar']; ?>"></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>