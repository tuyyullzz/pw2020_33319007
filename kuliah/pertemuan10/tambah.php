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
  <title>form tambah data mahasiswa</title>
</head>

<body>
  <h3>form tambah data mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NIM :
          <input type="text" name="nim" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Kelas :
          <input type="text" name="kelas" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">tambah data!</button>
      </li>
    </ul>
  </form>
</body>

</html>