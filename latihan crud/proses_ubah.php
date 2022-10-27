<<<<<<< HEAD
<?php
$koneksi= mysqli_connect('localhost','root','','belajar');
$query=" update mahasiswa set nama='$_POST[nama]' where id='$_POST[id]'";
mysqli_query($koneksi,$query);
header("Location:mahassiwa.php");
=======
<?php
$koneksi= mysqli_connect('localhost','root','','belajar');
$query=" update mahasiswa set nama='$_POST[nama]' where id='$_POST[id]'";
mysqli_query($koneksi,$query);
header("Location:mahassiwa.php");
>>>>>>> d6b94b3d99d07da055ec4f8907159f8e0bd6de1a
?>