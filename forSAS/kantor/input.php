<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
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
    <link rel="icon" href="../logo/Untitled-1.png"/>
    <title>Office Input | forSAS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <link href="../css/sidebars.css" rel="stylesheet">
  </head>
  <body>
    


<main>
<div class="flex-shrink-0 p-3 " style="width: 200px;height: 800px;px;background-color:gainsboro">
    <a href="../home.php" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <img src="../logo/telkom.png" style="width:100px">
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Kantor Cabang
        </button>

        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="input.php" class="link-dark rounded">Input Kantor</a></li>
            <li><a href="list.php" class="link-dark rounded">List Kantor</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Laporan
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="../laporan/input.php" class="link-dark rounded">Input Laporan</a></li>
            <li><a href="../laporan/list.php" class="link-dark rounded">List Laporan</a></li>
          </ul>
        </div>
      </li>
      
      <li class="border-top my-5"></li>
      <li class="mb-1">
      <a class="btn btn-outline-danger btn-sm" href="../logout.php" role="button">Logout</a>
      </li>
    </ul>
  </div>

<br>
<div class="container">
<br>
<br>
    <div class="card">
        <h5 class="card-header text-center">Input Kantor</h5>
        <div class="card-body">
        <form method="post" action="proses_kantor.php?action=add">

          <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Kantor</label>
                <input type="text" name="kode_kantor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kantor</label>
                <input type="text" name="nama_kantor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No. Telp</label>
                <input type="text" name="no_telp"class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
</main>




    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
  </body>
</html>
