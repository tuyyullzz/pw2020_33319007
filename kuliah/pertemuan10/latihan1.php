<?php
//koneksi ke database dan pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_33319007');

//query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


//tampung ke variabel mahasiswa
$mahasiswa = $rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="18" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jurusan</th>
      <th>Kelas</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td>1</td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['nim']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td><?= $m['kelas']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>