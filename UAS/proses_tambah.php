<?php
session_start(); 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	
	$nik = $_POST['NIK'];
    $nama = $_POST['Nama'];
    $kode_departement = $_POST['Kode_Departement'];
    $gender = $_POST['Gender'];
    $gaji_pokok = $_POST['Gaji_pokok'];
    $tunjangan = $_POST['Tunjangan'];

}

$query = "INSERT INTO karyawan set NIK='$nik', Nama='$nama', Kode_Departement='$kode_departement', Gender='$gender', Gaji_pokok='$gaji_pokok', Tunjangan='$tunjangan'";
mysqli_query($koneksi, $query);

if ($query) {
	header("location: karyawan.php");
}else{
	echo "gagal";
}

 ?>