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

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
            WHERE 
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' OR
            kelas LIKE '%$keyword%'
            ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  //cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    //cek password
    if (password_verify($password, $user['password'])) {
      // set session 
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username atau password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
          alert('username / password tidak boleh kososng!');
          document.location.href = 'registrasi.php';
          </script>
        ";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
          alert('username sudah ada');
          document.location.href = 'registrasi.php';
          </script>
        ";
    return false;
  }
  // jika password tidak sama
  if ($password1 !== $password2) {
    echo "<script>
          alert('password tidak sesuai');
          document.location.href = 'registrasi.php';
          </script>
        ";
    return false;
  }

  //jika password lebih kecil dari 6 digit
  if (strlen($password1) < 5) {
    echo "<script>
    alert('password terlalu sedikit');
    document.location.href = 'registrasi.php';
    </script>
  ";
    return false;
  }

  //jika user dan pwd sudah sesuai
  // enkripsi pwd
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  //insert ke tabel user
  $query = "INSERT INTO user
              VALUES
            (null, '$username','$password_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
