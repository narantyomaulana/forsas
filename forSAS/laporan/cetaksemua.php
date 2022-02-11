<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}

$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "forsas";
$koneksi    = mysqli_connect($host, $user, $password, $database);
	
// include('../conn.php');
// $db = new database();
// $data_laporan = $db->tampil_laporan();

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
    <title>Security Report | <?php echo date('Y-m-d')?> </title>


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
      .scroll{
        height:400px;
        overflow:scroll;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet">
  </head>
  <body>
    

  <div class="container text-center">
  <img src="../logo/telkom.png" style="width:300px;">
  <br>
  <br>
</div>
<br>


<br>


<div class="container" style="margin-left:3px;font-size:10px">
<table class="table table-sm caption-top " style="font-size:10px">
  
  <thead class="table-light">
    <tr>
    <!-- <th scope="col">Kode Laporan</th> -->
             <th scope="col">Kode Kantor</th>
              <th scope="col">Nama Kantor</th>
              <th scope="col">No Telp</th>
              <th scope="col">Alamat</th>
              <th scope="col">Tanggal Laporan</th>
              <th scope="col">Waktu</th>  
              <th scope="col">Mesin Tempel</th>
              <th scope="col">Perahu Karet</th>
              <th scope="col">Tenda</th>
              <th scope="col">Pompa</th>
              <th scope="col">PLN</th>
              <th scope="col">Genset PLN</th>
              <th scope="col">Genset Pompa</th>
              <th scope="col">CCTV WITEL</th>
              <th scope="col">Total CCTV WITEL</th>
              <th scope="col">CCTV TA</th>
              <th scope="col">Total CCTV TA</th>
              <th scope="col">Genangan Air</th>
              <th scope="col">BBM</th>
              <th scope="col">Kapasitas</th>
              <th scope="col">Catudaya</th>
              <th scope="col">Cuaca</th>
              <th scope="col">Suhu Central</th>
              <th scope="col">Suhu Transmisi</th>
              <th scope="col">Suhu Rectifier</th>
              <th scope="col">Nama Pelapor</th>
              <th scope="col">Kondisi Pelapor</th>
              <th scope="col">Kondisi Gedung</th>
              <th scope="col">Image</th>
            
      
    </tr>
  </thead>
  <tbody>
      <?php
    $sql= "SELECT * FROM kantor INNER JOIN laporan on kantor.id=laporan.id_kantor  ";
    $result=mysqli_query($koneksi, $sql);
    ?>
    <tr>
    <?php
   
    while($d=mysqli_fetch_object($result)){
      ?>
    
      <!-- <th scope="row"><?php echo $d->id_laporan; ?></th> -->
     <td><b><?php echo $d->kode_kantor; ?></b></td>
      <td><b><?php echo $d->nama_kantor; ?></b></td>
      <td><?php echo $d->no_telp; ?></td>
      <td><?php echo $d->alamat; ?></td>
      <td><?php echo date('d-m-Y',strtotime($d->tgl_laporan)); ?></td>
      <td><?php echo $d->waktu; ?></td>
      <td><?php echo $d->mesin_tempel; ?></td>
      <td><?php echo $d->perahu_karet; ?></td>
      <td><?php echo $d->tenda; ?></td>
      <td><?php echo $d->pompa; ?></td>
      <td><?php echo $d->pln; ?></td>
      <td><?php echo $d->genset_pln; ?></td>
      <td><?php echo $d->genset_pompa; ?></td>
      <td><?php echo $d->cctv; ?> Hidup</td>
      <td><?php echo $d->total_cctv; ?> dari Jumlah CCTV</td>
      <td><?php echo $d->cctv_ta; ?> Hidup</td>
      <td><?php echo $d->total_cctvta; ?> dari Jumlah CCTV</td>
      <td><?php echo $d->genangan_air; ?></td>
      <td><?php echo $d->bbm; ?> Liter </td>
      <td><?php echo $d->kapasitas; ?> Liter </td>
      <td><?php echo $d->catudaya; ?> Volt</td>
      <td><?php echo $d->cuaca; ?></td>
      <td><?php echo $d->suhu_central; ?> °C</td>
      <td><?php echo $d->suhu_trans; ?> °C</td>
      <td><?php echo $d->suhu_rect; ?> °C</td>
      <td><?php echo $d->nama_pelapor; ?></td>
      <td><?php echo $d->kondisi_petugas; ?></td>
      <td><?php echo $d->kondisi; ?></td>
      <td><?php echo "<img src='../images/$d->foto' width='70' height='90' />";?></td>
     
     
    </tr>
    
    <?php
  }
    ?>
    
   
  </tbody>
</table>


</div>


</div>





    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/243d5afe8a.js" crossorigin="anonymous"></script>
      <script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
      <script type="text/javascript">window.print();</script>
  </body>
</html>
