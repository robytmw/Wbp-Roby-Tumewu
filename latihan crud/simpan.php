<<<<<<< HEAD
<?php
$koneksi=mysqli_connect('localhost','root','','belajar');
$query="insert into mahasiswa values ('$_POST[id]','$_POST[nama]')";
mysqli_query($koneksi,$query);
header("Location:mahasiswa.php");

=======
<?php
$koneksi=mysqli_connect('localhost','root','','belajar');
$query="insert into mahasiswa values ('$_POST[id]','$_POST[nama]')";
mysqli_query($koneksi,$query);
header("Location:mahasiswa.php");

>>>>>>> d6b94b3d99d07da055ec4f8907159f8e0bd6de1a
?>