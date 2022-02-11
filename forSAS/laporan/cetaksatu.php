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
	

                
        if(isset($_GET['id'])){
            $id_laporan=$_GET['id'];
        }else{
            die("NO ID SELECTED!");
        }
        $query=mysqli_query($koneksi, "SELECT * FROM kantor INNER JOIN laporan on kantor.id=laporan.id_kantor WHERE id_laporan='$id_laporan'");
        $result=mysqli_fetch_array($query);


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
    <title><?php echo date('Y-m-d')?> | Kode : <?php echo $result['id_laporan']; ?></title>

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
    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet">
  </head>
  <body>


<br>
<?php
                
        if(isset($_GET['id'])){
            $id_laporan=$_GET['id'];
        }else{
            die("NO ID SELECTED!");
        }
        $query=mysqli_query($koneksi, "SELECT * FROM kantor INNER JOIN laporan on kantor.id=laporan.id_kantor WHERE id_laporan='$id_laporan'");
        $result=mysqli_fetch_array($query);

        ?>
    <div class="container text-center" style="margin-left:3px;font-size:10px" >
    <img src="../logo/telkom.png" style="width:300px;">
    <br>
    <br><br><br>
    <h5>Laporan</h5>
    <h5><?php echo $result['kode_kantor']; ?></h5>
        <table class="table-sm table-bordered">
        
    <thead>
        <tr style="background-color:lightsteelblue;color:white">
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
        <tr>
      <td><b><?php echo $result['kode_kantor']; ?></b></td>
      <td><b><?php echo $result['nama_kantor']; ?></b></td>
      <td><?php echo $result['no_telp']; ?></td>
      <td><?php echo $result['alamat']; ?></td>
      <td><?php echo $result['tgl_laporan']; ?></td>
      <td><?php echo $result['waktu']; ?></td> 
      <td><?php echo $result['mesin_tempel']; ?></td>
      <td><?php echo $result['perahu_karet']; ?></td>
      <td><?php echo $result['tenda']; ?></td>
      <td><?php echo $result['pompa']; ?></td>
      <td><?php echo $result['pln']; ?></td>
      <td><?php echo $result['genset_pln']; ?></td>
      <td><?php echo $result['genset_pompa']; ?></td>
      <td><?php echo $result['cctv']; ?> Hidup</td>
      <td><?php echo $result['total_cctv']; ?> dari Jumlah CCTV</td>
      <td><?php echo $result['cctv_ta']; ?> Hidup</td>
      <td><?php echo $result['total_cctvta']; ?> dari Jumlah CCTV</td>
      <td><?php echo $result['genangan_air']; ?></td>
      <td><?php echo $result['bbm']; ?> Liter </td>
      <td><?php echo $result['kapasitas']; ?> Liter </td>
      <td><?php echo $result['catudaya']; ?> Volt </td>
      <td><?php echo $result['cuaca']; ?></td>
      <td><?php echo $result['suhu_central']; ?> °C </td>
      <td><?php echo $result['suhu_trans']; ?> °C </td>
      <td><?php echo $result['suhu_rect']; ?> °C </td>
      <td><b><?php echo $result['nama_pelapor']; ?></b></td>
      <td><?php echo $result['kondisi_petugas']; ?></td>
      <td><?php echo $result['kondisi']; ?></td>
      <td><?php echo "<img src='../images/$result[foto]' width='70' height='90' />";?></td>
        </tr>
    </tbody>
    </table>
      
    </div>





    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
      <script type="text/javascript">window.print();</script>
  </body>
</html>
