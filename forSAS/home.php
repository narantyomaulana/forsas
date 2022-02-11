<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}

include_once __DIR__ . '/conn.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
  case 'ganti_password':
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $nik = isset($_SESSION['nik']) ? $_SESSION['nik'] : '';

    $database = new database();
    $database->ganti_password($nik, $password);

    echo "<script>alert('Password berhasil diganti');window.location.href='home.php';</script>";

    break;
  
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <link rel="icon" href="logo/Untitled-1.png" />
  <title>Home| forSAS</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">



  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Favicons -->
  <!-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3"> -->


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</head>

<body>



  <main>
    <div class="flex-shrink-0 p-3 " style="width: 200px;height: 800px;px;background-color:gainsboro">
      <a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <img src="logo/telkom.png" style="width:100px">
      </a>
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
            data-bs-target="#home-collapse" aria-expanded="true">
            Kantor Cabang
          </button>
          <div class="collapse show" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="kantor/input.php" class="link-dark rounded">Input Kantor</a></li>
              <li><a href="kantor/list.php" class="link-dark rounded">List Kantor</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
            data-bs-target="#dashboard-collapse" aria-expanded="false">
            Laporan
          </button>
          <div class="collapse" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="laporan/input.php" class="link-dark rounded">Input Laporan</a></li>
              <li><a href="laporan/list.php" class="link-dark rounded">List Laporan</a></li>
            </ul>
          </div>
        </li>

        <li class="border-top my-5"></li>
        <li class="mb-1">
          <a class="btn btn-outline-danger btn-sm" href="logout.php" role="button">Logout</a>
        </li>
        <li class="border-top my-2"></li>
        <li class="mb-1">
          <button onclick="$('#modalGantiPassword').modal('show')" class="btn btn-success btn-sm" role="button">Change Password</button>
        </li>
      </ul>
    </div>

    <br>
    <div class="container">
      <br>
      <br>
      <br>
      <h3> Selamat datang, <?php echo $_SESSION['nama']; ?> </h3>
      <li class="border-top my-1"></li>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="logo/1609941620692_original_Artboard 1-100_1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="logo/1574251345659_original_rsz_banner_home_telkom_4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="logo/1574251345659_original_rsz_banner_home_telkom_2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </main>

    <!-- The Modal -->
<div class="modal fade" id="modalGantiPassword">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ganti Password</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="?action=ganti_password" method="post">
          <div class="form-group">
            <label for="pwd">Masukan Password Baru:</label>
            <input type="password" name="password" require class="form-control" id="pwd">
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="$('#modalGantiPassword form').submit()">Simpan</button>
      </div>

    </div>
  </div>
</div>


  

  <script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
</body>

</html>
