<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
include('../conn.php');
$db = new database();
 $data_kantor = $db->tampil_data();

 
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
    <title>Report Input | forSAS</title>

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
            <li><a href="../kantor/input.php" class="link-dark rounded">Input Kantor</a></li>
            <li><a href="../kantor/list.php" class="link-dark rounded">List Kantor</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Laporan
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Input Laporan</a></li>
            <li><a href="list.php" class="link-dark rounded">List Laporan</a></li>
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
<div class="card ">
    <div class="card-header text-center" style="font-weight:bold;font-size: 24px;">
        Input Laporan
    </div>

    
    <div class="card-body mr-auto ">
    <div class="row">
    <div class="col text-left ">
    <form action="proses_laporan.php" method="POST" enctype="multipart/form-data"> 
    <div class="form-group">
    <?php
        
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "forsas";
    $koneksi    = mysqli_connect($host, $user, $password, $database);
    $query = mysqli_query($koneksi, "SELECT max(id_laporan) as kodeTerbesar FROM laporan");
	  $data = mysqli_fetch_assoc($query);
	  $kodeBarang = $data['kodeTerbesar'];
	$urutan = (int) substr($kodeBarang, 4, 3);
	$urutan++;
	$huruf = "SAS-";
	$kodeBarang1 = $huruf . sprintf("%03s", $urutan);

    
    
    ?>
            <input type="hidden" name="kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $kodeBarang1 ?>" readonly>
        </div>
    <!-- Nama kantor -->
        <div class="form-group">
            <label for="namakantor" style="font-weight:bold">Kantor</label> 
            <select class="form-control" name="id_kantor" id="nama_kantor" required>
            <option value="">-- Pilih --</option>
            <?php
            foreach($data_kantor as $data){
              ?>
              <option value="<?php echo $data['id']?>"><?php echo $data['nama_kantor']?></option>
              <?php
            }
            
            ?>
            </select>
        </div>
        <!-- Tanggal laporan -->
        <div class="form-group">
            <label for="exampleInputEmail1"  style="font-weight:bold">Tanggal</label>
            <input type="date" name="tgl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=date('Y-m-d')?>" required>
        </div>

         <div>
            <div class="form-group">
              <label for="waktu" style="font-weight:bold">Waktu</label>
              <input type="time" name="waktu" class="form-control" value="<?=date("H:i:sa")?>">
            </div>
          </div>
        
        <hr>
        <!-- Mesin Tempel -->
        <div class="form-group">
        <label for="mesin_tempel"  style="font-weight:bold">Mesin Tempel</label> <br>
            <div class="form-check form-check-inline">
            <label for="mesin_tempel">                   
                <input type="radio" name="mesin_tempel" value="Ada" required> Ada
                <br>
                <input type="radio" name="mesin_tempel" value="Tidak ada"> Tidak ada
            </label>
            </div>    
        </div>  

        <!-- Perahu Karet -->
        <div class="form-group">
        <label for="mesin_tempel" style="font-weight:bold">Perahu Karet</label> <br>
            <div class="form-check form-check-inline">
            <label for="mesin_tempel">                   
                <input type="radio" name="perahu_karet" value="Ada" required> Ada
                <br>
                <input type="radio" name="perahu_karet" value="Tidak ada"  > Tidak ada
            </label>
            </div>    
        </div>  

      <div class="form-group">
      <label for="mesin_tempel" style="font-weight:bold">Tenda</label> <br>
        <div class="form-check form-check-inline">
          <label for="mesin_tempel">                   
            <input type="radio" name="tenda" value="Ada" required> Ada
            <br>
            <input type="radio" name="tenda" value="Tidak ada"  > Tidak ada
          </label>
        </div>    
      </div>   

      <div class="form-group">
      <label for="mesin_tempel" style="font-weight:bold">Pompa</label> <br>
        <div class="form-check form-check-inline">
          <label for="mesin_tempel">                   
            <input type="radio" name="pompa" value="Tersedia" required> Tersedia
            <br>
            <input type="radio" name="pompa" value="Tidak Tersedia"  > Tidak Tersedia
          </label>
        </div>    
      </div>  
      </div>
      <div class="col">
      <div class="form-group">
      <label for="mesin_tempel" style="font-weight:bold">Genangan Air</label> <br>
        <div class="form-check form-check-inline">
          <label for="mesin_tempel">                   
            <input type="radio" name="genangan" value="Ada" required> Ada
            <input type="radio" name="genangan" value="Tidak ada"  > Tidak ada
          </label>
        </div>    
      </div>  
      
       
        
      <div class="form-group">
        <label for="exampleInputEmail1" style="font-weight:bold">BBM (Liter)</label>
        <input type="text" name="bbm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <small id="emailHelp" class="form-text text-muted">dari 0 Liter.</small>
      </div>

      <div class="form-group">
            <label for="exampleInputPassword1" style="font-weight:bold">Kapasitas (liter)</label>
            <input type="text" class="form-control" name="kapasitas" id="exampleInputPassword1" required>
        </div>

        <div class="form-group">
            <label for="formControlRange" style="font-weight:bold">Suhu Central (°c)</label>
            <input type="text" name="suhu_cent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            
          </div>

          <div class="form-group">
            <label for="formControlRange" style="font-weight:bold">Suhu Transmisi (°c)</label>
            <input type="text" name="suhu_trans" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            
          </div>
          <div class="form-group">
            <label for="formControlRange" style="font-weight:bold">Suhu Rectifier (°c)</label>
            <input type="text" name="suhu_rec" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          </div>
          </div>
      

      <div class="col">
        
        

        
        <div class="form-group">
            <label for="exampleInputPassword1"style="font-weight:bold">Catudaya</label>
            <input type="text" class="form-control" name="catudaya" id="exampleInputPassword1" required>
        </div>  

        <div class="form-group">
            <label for="exampleInputPassword1"style="font-weight:bold">Cuaca</label>
            <input type="text" class="form-control" name="cuaca" id="exampleInputPassword1" required>
        </div>

        <div class="form-group">
      <label for="mesin_tempel" style="font-weight:bold">PLN</label> <br>
        <div class="form-check form-check-inline">
          <label for="mesin_tempel">                   
            <input type="radio" name="pln" value="on" required> on
            <input type="radio" name="pln" value="off"  > off
          </label>
        </div>    
      </div>  

      <div class="form-group">
      <label for="mesin_tempel" style="font-weight:bold">Genset (PLN)</label> <br>
        <div class="form-check form-check-inline">
          <label for="mesin_tempel">                   
            <input type="radio" name="genset_pln" value="on" required> on
            <input type="radio" name="genset_pln" value="off"  > off
          </label>
        </div>    
      </div>  

        <div class="form-group">
      <label for="mesin_tempel" style="font-weight:bold">Genset (Pompa Chamber)</label> <br>
        <div class="form-check form-check-inline">
          <label for="mesin_tempel">                   
            <input type="radio" name="genset_pompa" value="Tersedia" required> Tersedia
            <input type="radio" name="genset_pompa" value="Tidak Tersedia"  > Tidak Tersedia
          </label>
        </div>    
      </div>  


       <div class="form-group">
        <label for="exampleInputEmail1" style="font-weight:bold">CCTV Witel</label>
        <input type="text" name="cctv" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <!-- <small id="emailHelp" class="form-text text-muted">Hidup ... dari 18</small> -->
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1" style="font-weight:bold">Total CCTV Witel</label>
        <input type="text" name="total_cctv" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <!-- <small id="emailHelp" class="form-text text-muted">Hidup ... dari 18</small> -->
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1" style="font-weight:bold">CCTV Telkom Akses</label>
        <input type="text" name="cctv_ta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <!-- <small id="emailHelp" class="form-text text-muted">Hidup ... dari 18</small> -->
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1" style="font-weight:bold">Total CCTV TA</label>
        <input type="text" name="total_cctvta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <!-- <small id="emailHelp" class="form-text text-muted">Hidup ... dari 18</small> -->
      </div>

      <!-- <div class="form-group">
      <label for="mesin_tempel" style="font-weight:bold">CCTV</label> <br>
        <div class="form-check form-check-inline">
          <label for="mesin_tempel">                   
            <input type="radio" name="cctv" value="Hidup" required> Hidup
            <input type="radio" name="cctv" value="Mati"  > Mati
          </label>
        </div>    
      </div>   -->

        </div>
        <div class="col">

        <div class="form-group">
            <label for="exampleInputPassword1"style="font-weight:bold">Nama Pelapor</label>
            <input type="text" class="form-control" name="pelapor" id="exampleInputPassword1" value="<?php echo $_SESSION['nama']; ?>" required>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1"style="font-weight:bold">Kondisi Pelapor</label>
            <input type="text" class="form-control" name="kondisi_petugas" id="exampleInputPassword1"  required>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1"style="font-weight:bold">Kondisi Gedung</label>
            <input type="text" class="form-control" name="kondisi_pelapor" id="exampleInputPassword1" required>
        </div>
        <hr>
        <div class="form-group">
          <label for="exampleFormControlFile1"style="font-weight:bold">Unggah foto</label>
          <input type="file" class="form-control-file" name="image"  required>
        </div>
        
          <br><br><br>
          <button type="submit" class="btn btn-primary" name="submit" style="width:200px;height:50px">Submit</button>
        </div>
      </div>
  </form>

    </div>
    </div>
    
    </div>
</div>
      
      
    
  </div>
</div>
</main>




    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
  </body>
</html>
