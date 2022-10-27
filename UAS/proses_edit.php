<?php
session_start();
error_reporting(0);
include 'koneksi.php';

//proses input
if (isset($_POST['ubahdata'])) {
    $nik = $_POST['NIK'];
    $nama = $_POST['Nama'];
    $kode_departement = $_POST['Kode_Departement'];
    $gender = $_POST['Gender'];
    $gaji_pokok = $_POST['Gaji_pokok'];
    $tunjangan = $_POST['Tunjangan'];
  
        // Proses ubah data ke Database
        $sql_f = "UPDATE karyawan set NIK='$nik', Nama='$nama', Kode_Departement='$kode_departement', Gender='$gender', Gaji_pokok='$gaji_pokok', Tunjangan='$tunjangan' WHERE NIK='$nik'";
        $ubah  = mysqli_query($koneksi, $sql_f);
        if($ubah){
          echo "<script>alert('Ubah Data Dengan ID Karyawan = ".$nik." Berhasil') </script>";
          echo "<script>window.location.href = \"karyawan.php\" </script>";
        } else {
          $sql    = "SELECT * FROM karyawan WHERE NIK = '".$nik."' ";
          $query  = mysqli_query($koneksi, $sql);
          while ($row = mysqli_fetch_array($query)) {
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href=\"karyawan_edit.php?NIK=".$row['NIK']."\"> Kembali Ke From ! </a>";
          }
        }
      } 
  ?>
  
