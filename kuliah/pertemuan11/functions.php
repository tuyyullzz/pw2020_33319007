<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_33319007');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  //jika hasilnya hanya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $kelas = htmlspecialchars($data['kelas']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              mahasiswa
              VALUES
              (null, '$nama', '$nim','$jurusan','$kelas','$gambar');
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id ") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $kelas = htmlspecialchars($data['kelas']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = " UPDATE mahasiswa SET
              nama = '$nama',
              nim = '$nim',
              jurusan = '$jurusan',
              kelas = '$kelas',
              gambar = '$gambar'
            WHERE id = $id;
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
