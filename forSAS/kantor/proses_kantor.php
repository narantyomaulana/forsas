<?php 
include('../conn.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['kode_kantor'],$_POST['nama_kantor'],$_POST['alamat'],$_POST['no_telp']);
	header('location:list.php');
}elseif($action=="update")
{
	$koneksi->update_data($_POST['kode_kantor'],$_POST['nama_kantor'],$_POST['alamat'],$_POST['no_telp'],$_POST['id_kantor']);
	header('location:list.php');
}elseif($action=="delete")
{
	$id_kantor = $_GET['id'];
	$koneksi->delete_data($id_kantor);
	header('location:list.php');
}
?>
