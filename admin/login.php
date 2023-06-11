<?php
session_start();
include "./koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="..//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <style>
    .login {
      background-image: url(../assets/img/btn.png);
      background-repeat: no-repeat;
      background-position: center;
      border: none;
      color: white;
      padding: 8px 32px;
      border-radius: 50px;
    }
  </style>

</head>

<body style="background-image: url(../assets/img/bg_login.png); background-size: cover; background-repeat: no-repeat ;">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-2 pb-2">
                    <h5 class="card-title text-center pb-0 fs-1" style="color: #6a6ac0;">WELCOME<br>back <i class="bi bi-dash-lg"></i><i class="bi bi-stars"></i></h5>
                    <br>
                  </div>
                  <?php
                  if (isset($_GET['pesan'])) {
                  ?>
                    <p class="mt-0 text-center" style="color: red; font-style: italic;">Maaf, Username / Password Salah</p>
                  <?php }
                  ?>

                  <form action="./loginkoneksi.php" method="POST" class="row g-3">
                    <div class="col-12">
                      <div class="input-group">
                        <input type="text" name="username" class="form-control" id="username" autofocus placeholder="Username">
                        <div class="invalid-feedback">Silahkan masukkan username Anda!</div>
                      </div>
                      <br>
                    </div>
                    
                    <div class="col-12">
                      <input type="password" name="password" class="form-control" id="password" required placeholder="P assword">
                      <div class="invalid-feedback">Silahkan masukkan password Anda!</div>
                      <br>
                    </div>

                    <div class="col-12 pt-2">
                      <button class="login w-100 mb-3" type="submit">Login</button>
                      <a href="../index.php" class="text-danger"><i class="bi bi-backspace"></i> Kembali</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>