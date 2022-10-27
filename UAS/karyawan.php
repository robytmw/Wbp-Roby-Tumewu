<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS</title>
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
</head>
</head>

<body>
<?php
            include 'koneksi.php';
                            $query1 = "SELECT * FROM karyawan ORDER BY NIK";

                            $pola = 'asc';
                            $polabaru = 'asc';

                            if (isset($_GET['orderby'])) {
                                $orderby = $_GET['orderby'];
                                $pola = $_GET['pola'];

                            $query1 = "SELECT * FROM karyawan ORDER BY $orderby $pola";
                            mysqli_query($koneksi, $query1);
                            if ($pola=='asc') {
                                $polabaru = 'desc';
                            }else{
                                $polabaru = 'asc';
                            }

                            }
                            ?>
                            <div class="row">

                                    <div class="table-responsive table--no-card m-b-30">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Kode Departement</th>
                                    <th class="text-right">Gender</th>
                                    <th>Gaji Pokok</th>
                                    <th>Tunjangan</th>
                                    <th>Aksi</th>
                                    <th><a href="logout.php">Logout</th>
                                                    
                                                </tr>
                                            </thead>
                                            <?php 
                                                $no = 1; 
                                            ?>
                                            <tbody>
                                            
                                            <?php 
                                            $no++;
                                                include 'paging.php';

                                                ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                <ul class="pagination justify-content-center">
                                    <form action="tambah.php" method="post">
                                <td><button type="submit" name="tambah" class="btn btn-primary">Tambah</button></td>
                        </ul>
                            
                    </div>
                </div>
            </div>

        </div>
                        </form>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script> 
</body>
        
    </html>
    <!-- end document-->
