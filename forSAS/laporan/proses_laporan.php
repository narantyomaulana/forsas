<?php 

$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "forsas";
$koneksi    = mysqli_connect($host, $user, $password, $database);

        $kode_laporan=$_POST['kode'];
        $id_kantor=$_POST['id_kantor'];
        $tgl=$_POST['tgl'];
        $waktu=$_POST['waktu'];
        $mesin_tempel=$_POST['mesin_tempel'];
        $perahu_karet=$_POST['perahu_karet'];
        $tenda=$_POST['tenda'];
        $pompa=$_POST['pompa'];
        $genangan=$_POST['genangan'];
        $bbm=$_POST['bbm'];
        $suhu_cent=$_POST['suhu_cent'];
        $suhu_trans=$_POST['suhu_trans'];
        $suhu_rec=$_POST['suhu_rec'];
        $kapasitas=$_POST['kapasitas'];
        $catudaya=$_POST['catudaya'];
        $cuaca=$_POST['cuaca'];
        $pln=$_POST['pln'];
        $genset_pln=$_POST['genset_pln'];
        $genset_pompa=$_POST['genset_pompa'];
        $cctv=$_POST['cctv'];
        $total_cctv=$_POST['total_cctv'];
        $cctv_ta=$_POST['cctv_ta'];
        $total_cctvta=$_POST['total_cctvta'];
        $pelapor=$_POST['pelapor'];
        $kondisi_petugas=$_POST['kondisi_petugas'];
        $kondisi_pelapor=$_POST['kondisi_pelapor'];
        $filename = $_FILES['image']['name'];
        
        if ($filename!=""){
            $ekstensi=array('png','jpg','jpeg','PNG','JPG','JPEG');
            $x=explode('.',$filename);
            $ekst= strtolower(end($x));
            $file_temp=$_FILES['image']['tmp_name'];
            $rand=rand(1,999);
            $xx=$rand.'-'.$filename;
            if (in_array($ekst,$ekstensi)===true){
                move_uploaded_file($file_temp, '../images/'. $xx);
                $query= "INSERT INTO laporan (id_laporan,
                    id_kantor,tgl_laporan,waktu,mesin_tempel,perahu_karet,
                    tenda,pompa,genset_pln,bbm,kapasitas,genangan_air,catudaya,cuaca,pln,genset_pompa,cctv,total_cctv,cctv_ta,total_cctvta,
                    suhu_central,suhu_trans,suhu_rect,nama_pelapor,kondisi_petugas,kondisi,foto)
                 VALUES ('$kode_laporan',
                    '$id_kantor',
                    '$tgl',
                    '$waktu',
                    '$mesin_tempel',
                    '$perahu_karet',
                    '$tenda',
                    '$pompa',
                    '$genset_pln',
                    '$bbm',
                    '$kapasitas',
                    '$genangan',
                    '$catudaya',
                    '$cuaca',
                    '$pln',
                    '$genset_pompa',
                    '$cctv',
                    '$total_cctv',
                    '$cctv_ta',
                    '$total_cctvta',
                    '$suhu_cent',
                    '$suhu_trans',
                    '$suhu_rec',
                    '$pelapor',
                    '$kondisi_petugas',
                    '$kondisi_pelapor',
                    '$xx')";
                    $result=mysqli_query($koneksi,$query);
                    if(!$result){
                        die("Querry error".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
                    }else{
                        echo "<script>alert('Berhasil input laporan');window.location='list.php'</script>";
                    }
            }else{
                echo "<script>alert('Ekstensi salah, hany dapat .png dan.jpg');window.location='input.php';</script>";
            }
        }
    
?>