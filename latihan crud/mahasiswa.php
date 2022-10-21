<?php
$koneksi=mysqli_connect('localhost','root','','belajar');
$query="select * from mahasiswa";
$hasil=mysqli_query($koneksi,$query);
while($baris=mysqli_fetch_array($hasil))
{
    echo $baris['id']." ".$baris['nama']." 
    
    <a href='ubah.php?id=".$baris['id']."'>Ubah</a>
    <a href='hapus.php?id=".$baris['id']."'>Hapus</a><br>";
}
?>
<a href='tambah.php'>Tambah</a>