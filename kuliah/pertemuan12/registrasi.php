<?php
session_start();

require 'functions.php';

//ketika tombol login ditekan
if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('user baru berhasil ditambahkan');
          document.location.href = 'login.php';
          </script>
        ";
  } else {
    echo 'user gagal ditambahakan';
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
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <title>Registrasi</title>
</head>

<body style="background-color: #AB47BC;">
  <div style="height:100px;width: 500px;text-align: center;position:center;margin-left:450px;margin-top:50px; " align="center">
    <!-- Default form login -->
    <form class="text-center border border-light p-5" action="" method="POST" style="background-color: white;box-shadow: 0 5px 15px rgba(0,0,0,.5);">

      <p class="h4 mb-4">Sign Up</p>
      <?php if (isset($login['error'])) : ?>
        <p><?= $login['pesan']; ?></p>
      <?php endif; ?>
      <!-- Email -->
      <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Username" name="username" autofocus autocomplete="off" required>

      <!-- Password -->
      <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password1" autocomplete="off" required>
      <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Konfirmasi password" name="password2" autocomplete="off" required>
      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-info btn-block my-4" type="submit" name="registrasi">Sign up</button>


    </form>
    <!-- Default form login -->
  </div>
</body>

</html>