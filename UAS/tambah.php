<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS</title>
</head>
<body>
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
    <title>Tambah Data</title>

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
</body>
 <!-- HEADER DESKTOP-->
 <header class="header-desktop">

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h1>Form Tambah Data</h1>
                          
                        </div>
                    </div>
                </div>
            </header>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                            <form action="proses_tambah.php" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                <table class="table table-borderless table-striped table-earning" >
                                        
                                        <tbody>
                                            <tr>
                                                <td>NIK</td>
                                                <td>
                                                
                                                <input type="text" class="form-control" maxlength="9" required="" name="NIK" autocomplete="off" size="25px" maxlength="25px">    
                                                
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>
                                                
                                                <input type="text" class="form-control" required="" name="Nama" autocomplete="off">    
                                                
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Kode Departement</td>
                                                <td>
                                                
                                                <input type="text" class="form-control" required="" name="Kode_Departement" autocomplete="off">    
                                                
                                            </td>
                                            </tr>
                
                                            <tr>
                                                <td>Gender</td>
                                                <td>
                                                <select class="form-control" required="" name="Gender">
                                                    <option>--</option>
                                                    <option>L</option>
                                                    <option>P</option>
                                                </select>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Gaji Pokok</td>
                                                <td>
                                                
                                                <input type="text" class="form-control" required="" name="Gaji_pokok" autocomplete="off">    
                                                
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Tunjangan</td>
                                                <td>
                                                
                                                <input type="text" class="form-control" required="" name="Tunjangan" autocomplete="off">    
                                                
                                            </td>
                                            </tr>

                                            <tr>
                                                <td><button type="submit" name="simpan" class="btn btn-primary">Simpan</button></td>
                                                <td><input type="reset" name="" value="Batal" class="btn btn-danger"></td>
                                            </tr>
                                                   
                                               
                                        </tbody>
                                        </table>
                                        </div>
                                </form>
                                    
                                 </div>    
                            </div>
</html>