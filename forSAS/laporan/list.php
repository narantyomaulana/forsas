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
    <title>Report List | forSAS</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/"> -->

    

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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">

    
    <!-- Custom styles for this template -->
    <link href="../css/sidebars.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
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
<h3>List Laporan ForSAS</h3>
<div class="col">
         <a class="btn btn-success" href="cetaksemua.php" target="_blank" role="button" style="margin-right:80%; margin-bottom: 1%;" ><i class="fas fa-print"></i>Cetak Semua</a>
        </div>
 
      <form class="d-flex" action="list.php" method="GET" >
        <!-- div class="col">
         <a class="btn btn-success" href="cetaksemua.php" target="_blank" role="button" style="margin-left:80%"><i class="fas fa-print"></i>Cetak Semua</a>
        </div> -->
        <!-- input class="form-control"  style="width:20%"  name="cari" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form>
      <!-- <br>
      <figcaption class="blockquote-footer">
      Input Kode Laporan 
      </figcaption>
      <br> -->
      
<table class="table table-responsive" id="example">
  
  <thead class="table-light" style="font-size:12px">
    <tr>
      <th scope="col">No</th>
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
              <th scope="col">Kondisi Gedung</th>
              <th scope="col">Nama Pelapor</th>
              <th scope="col">Kondisi Pelapor</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  <?php
$conn= mysqli_connect('localhost','root','','forsas');
$sql="SELECT * FROM kantor INNER JOIN laporan on kantor.id=laporan.id_kantor ORDER BY id_kantor";
$result=mysqli_query($conn, $sql);
?>
<!-- 
  // $no=1;
  // foreach($data_laporan as $dl){ -->
  
    <tr>
    <?php
    $no=1;
    while($d=mysqli_fetch_object($result)){
      ?>
      <td><?php echo $no++; ?></td>
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
      <td><?php echo $d->kondisi; ?></td>
      <td><b><?php echo $d->nama_pelapor; ?></b></td>
      <td><?php echo $d->kondisi_petugas; ?></td>
      
      <!-- <td><a href="images/<?php echo $d->foto; ?>"><img src="images/<?php echo $d->foto; ?>" width="100"></a></td> -->
      <td><?php echo "<a href='../images/$d->foto'><img src='../images/$d->foto' width='70' height='90' /></a>";?>
        
      </td>
      <td>
      	<a href="cetaksatu.php?id=<?php echo $d->id_laporan; ?>" target="_blank"><i class="fas fa-print"></i></a>
	<button onclick="copyTeks<?= str_replace(['SAS-', 0, '-', ' '], '', $d->id_laporan) ?>()">
		Salin
	</button>
  <a href="delete.php?id=<?= $d->id_laporan ?>" onclick="return confirm('Apakah Anda Ingin Menghapus?')">Hapus</a>
	 <script>
		function copyTeks<?= str_replace(['SAS-', 0, '-', ' '], '', $d->id_laporan) ?>() {
			return copyFormatted(`
       Kode kantor : <?= $d->kode_kantor ?><br>
			<p>Nama kantor : <?= $d->nama_kantor ?></p>
        No Telp : <?= $d->no_telp ?><br>
				Alamat : <?= $d->alamat ?><br>
				Tanggal laporan : <?= date('d-m-Y',strtotime($d->tgl_laporan)); ?><br>
				Waktu : <?= $d->waktu ?><br>
				Mesin tempel : <?= $d->mesin_tempel ?><br>
				Perahu Karet : <?= $d->perahu_karet ?><br>
				Tenda : <?= $d->tenda ?><br>
				Pompa : <?= $d->pompa ?><br>
				PLN : <?= $d->pln ?><br>
				Genset PLN : <?= $d->genset_pln ?> <br>
				Genset Pompa : <?= $d->genset_pompa ?><br>
        CCTV WITEL: <?= $d->cctv ?> Hidup<br>
        Total CCTV WITEL: <?= $d->total_cctv ?> Dari Jumlah CCTV<br>
        CCTV TA : <?= $d->cctv_ta ?> Hidup<br>
        Total CCTV TA: <?= $d->total_cctvta ?> Dari Jumlah CCTV<br>
				Genangan air : <?= $d->genangan_air ?><br>
				BBM : <?= $d->bbm ?> Liter <br>
				Kapasitas : <?= $d->kapasitas ?>  Liter<br>
				Catudaya : <?= $d->catudaya ?> Volt<br>
				Cuaca : <?= $d->cuaca ?> <br>
				Suhu central : <?= $d->suhu_central ?> °C<br>
				Suhu trans : <?= $d->suhu_trans ?> °C<br>
				Suhu rect : <?= $d->suhu_rect ?> °C<br>
        Kondisi Gedung : <?= $d->kondisi ?> <br>
        Nama Pelapor : <?= $d->nama_pelapor ?> <br>
        Kondisi Pelapor : <?= $d->kondisi_petugas ?> <br>
        
			`);
		}	 
	 </script>
      </td>
     
    </tr>
    
    <?php
  }
    ?>
    
   
  </tbody>
</table>

</div>
</main>


  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        // dom: 'Bfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ]
    } );
} );
	  
	  function copyFormatted (html) {
  // Create an iframe (isolated container) for the HTML
  var container = document.createElement('div')
  container.innerHTML = html
  
  // Hide element
  container.style.position = 'fixed'
  container.style.pointerEvents = 'none'
  container.style.opacity = 0

  // Detect all style sheets of the page
  var activeSheets = Array.prototype.slice.call(document.styleSheets)
    .filter(function (sheet) {
      return !sheet.disabled
  })

  // Mount the iframe to the DOM to make `contentWindow` available
  document.body.appendChild(container)

  // Copy to clipboard
  window.getSelection().removeAllRanges()
  
  var range = document.createRange()
  range.selectNode(container)
  window.getSelection().addRange(range)

  document.execCommand('copy')
  for (var i = 0; i < activeSheets.length; i++) activeSheets[i].disabled = true
  document.execCommand('copy')
  for (var i = 0; i < activeSheets.length; i++) activeSheets[i].disabled = false
  
  // Remove the iframe
  document.body.removeChild(container)
}
  </script>

    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/243d5afe8a.js" crossorigin="anonymous"></script>
      <script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
  </body>
</html>
