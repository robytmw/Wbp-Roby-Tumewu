<?php
$koneksi=mysqli_connect('localhost','root','','belajar');
$query="insert into mahasiswa values ('$_POST[id]','$_POST[nama]')";
mysqli_query($koneksi,$query);
header("Location:mahasiswa.php");

?>