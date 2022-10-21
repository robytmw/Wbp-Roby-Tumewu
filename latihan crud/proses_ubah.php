<?php
$koneksi= mysqli_connect('localhost','root','','belajar');
$query=" update mahasiswa set nama='$_POST[nama]' where id='$_POST[id]'";
mysqli_query($koneksi,$query);
header("Location:mahassiwa.php");
?>