<?php
$id = $_GET['id'];
$conn= mysqli_connect('localhost','root','','forsas');
$sql="DELETE FROM laporan WHERE id_laporan = '$id'";
mysqli_query($conn, $sql);
header('location:list.php');
?>