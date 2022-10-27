<?php 
require_once("koneksi.php");
error_reporting(0);
session_start();
 ?>
 
<?php 
	include 'koneksi.php';
	$id = $_GET['NIK'];
	$data = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE NIK = '$id'");
    while ($d = mysqli_fetch_array($data)) {
      
    
 ?>

<!DOCTYPE html>
<html>
<head>
  <!-- Idiot-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Idiot-->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Karyawan</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- end script-->

    <title>Ubah Data</title>
</head>
<body>
<form action="proses_edit.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">NIK</label>
  <input type="text" class="form-control" readonly="" name="NIK" autocomplete="off" value="<?php echo $d['NIK'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
  <input type="text" class="form-control" name="Nama" autocomplete="off" value="<?php echo $d['Nama'];?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Departement</label>
  <input type="text" class="form-control"  name="Kode_Departement" autocomplete="off" value="<?php echo $d['Kode_Departement'];?>">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Gender</label>
    <input type="text" class="form-control" name="Gender" autocomplete="off" value="<?php echo $d['Gender'];?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Gaji Pokok</label>
    <input type="text" class="form-control" name="Gaji_pokok" autocomplete="off" value="<?php echo $d['Gaji_pokok'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tunjangan</label>
    <input type="text" class="form-control" name="Tunjangan" autocomplete="off" value="<?php echo $d['Tunjangan'];?>">

    <button type="submit" class="btn btn-primary" name="ubahdata">Ubah Data</button>
 
</form>
</body>
</html>

<?php } ?>
