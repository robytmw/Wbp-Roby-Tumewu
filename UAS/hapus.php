<?php 
include 'koneksi.php';
session_start();

$id = $_GET['NIK'];
$sql = "SELECT *  FROM karyawan WHERE NIK = '$id'";
$query = mysqli_query($koneksi, $sql);
$hapus_f = mysqli_fetch_array($query);

$sql_h = "DELETE FROM karyawan WHERE NIK = '$id' ";
$hapus = mysqli_query($koneksi, $sql_h);
if ($hapus) {
         
         header("location: karyawan.php");
    
} else {
  echo "Gagal Dihapus";
}

 ?>

