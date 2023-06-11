<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DISGUESSe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="./assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">

  <style>
    .konsul {
      background-image: url(./assets/img/btn.png);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      border: none;
      color: white;
      padding: 8px 32px;
      border-radius: 50px;
    }

    .adm {
      color: white;
    }

    .adm1 {
      color: white;
    }

    .adm1:hover {
      color: #717ff5;
    }

    .datang {
      color: #4154f1;
    }
  </style>
</head>

<body style="background-image: url(./assets/img/bg_index.png); background-size: cover; background-repeat: no-repeat ;">
  <section>
    <!-- Awal Container -->
    <div class="container-fluid">
      <!-- Awal Navbar -->
      <nav class="navbar navbar-expand-lg" style="background-color: white;">
        <img src="./assets/img/logo.png" class="float-end me-1" height="60px">
        <a class="navbar-brand fw-bold" style="color: #f29faf;"> DISGUESSe</a>
        <div class="container p-2" style="justify-content: space-evenly;">
          <a class="nav-link" aria-current="page" href="./index.php" style="color: #f29faf;"><b>HOME</b></a>
          <a class="nav-link" aria-current="page" href="./daftarpenyakit.php" style="color: #f29faf;"><b>SKIZOFRENIA</b></a>
          <a class="nav-link" aria-current="page" href="./konsultasi.php" style="color: #f29faf;"><b>CONSULTATION</b></a>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="./admin/login.php" type="submit" class="konsul">LOGIN</a>
        </div>
    </div>
    </nav>
    <!-- Akhir Navbar -->
    <br> <br> <br> <br> <br>

    <!-- Jumbotron -->
    <div class="container" style="margin: 0px 350px;">
      <div class="bg p-5 mb-5 rounded">
        <div class="container-fluid ms-5">
          <h1 class="fw-bold datang" style="color: #6a6ac0;">DIAGNOSA <i class="bi bi-stars"></i><br>dini SKIZOFRENIA</h1>
          <p style="color: #6dcab8;"><i>Sistem diagnosa dini mengenai jenis gangguan jiwa <u>SKIZOFRENIA</u></i></p>
        </div>
      </div>
      <div class="container" style="margin-left: 500px;">
        <a href="./konsultasi.php" type="button" class="konsul">Konsultasi<i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
    <!-- Akhir jumbotron -->
    </div>
    <!-- Akhir Container -->
  </section>

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