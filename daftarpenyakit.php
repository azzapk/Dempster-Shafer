<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Penyakit</title>
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
    .table {
      border-radius: 40px;
      overflow: hidden;
      font-family: "Poppins", sans-serif;
      border-radius: 8px;
      overflow: hidden;
    }

    .warning {
      color: #daa812;
    }

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
  </style>
</head>

<body style="background-image: url(./assets/img/bg_jenis_1.png); background-size: cover; background-repeat: no-repeat ;">
  <?php
  include './admin/koneksi.php';
  // mengaktifkan session
  session_start();
  ?>

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

    <div class="card mt-4 col-md-10 mx-auto" style="background-color: rgba(255, 255, 255, 0.5);">
      <div class="card-body">
        <div class="container" style="text-align: center;">
          <h1 class="fw-bold datang" style="color: #6a6ac0;">jenis - jenis <i class="bi bi-stars"></i><br>SKIZOFRENIA</h1>
        </div>
        <div class="table-responsive mt-4">
          <table class="table" style="border-collapse: collapse;">
            <?php
            include "./admin/koneksi.php";
            $sql = "SELECT * FROM tb_penyakit ORDER BY kdpenyakit";
            $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));
            $no = 0;
            while ($data = mysqli_fetch_array($qry)) {
            ?>
              <tbody>
                <tr>
                  <td>
                    <div align="justify">
                      <div align="left"><h3><b style="color: #f29faf;"><?php echo "$data[nama_penyakit]"; ?></b></h3></div>
                      <div align="left"><p class="text-info" style="color: #6dcab8;"><?php echo "$data[definisi]"; ?></p></div>
                    </div>
                  </td>
                </tr>
              </tbody>
            <?php
            }
            ?>
          </table>
        </div>
        <div class="mt-4" style="text-align: right;">
          <a href="./index.php" type="button" class="btn btn-outline-danger btn-sm ms-3"><i class="bi bi-box-arrow-left"></i> Kembali</a>
        </div>
      </div>
    </div>
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