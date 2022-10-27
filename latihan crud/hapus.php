<?php
$koneksi=mysqli_connect('localhost','root','','belajar');
$query="delete from mahasiswa where id='$_GET[id]'";
mysqli_query($koneksi,$query);
header("Location:mahasiswa.php");
?>