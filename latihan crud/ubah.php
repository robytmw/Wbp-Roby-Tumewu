<<<<<<< HEAD
<?php
$koneksi= mysqli_connect('localhost','root','','belajar');
$query= "select * from mahasiswa where id='$_GET[id]'";
$hasil= mysqli_query($koneksi,$query);
$baris= mysqli_fetch_array($hasil);
?>
<form action="proses_ubah.php" method="post">
    id <input type="text" name="id" value="<?php echo $baris[0]?>"></br>
    nama <input type="text" name="nama" value="<?php echo $baris[1]?>"></br>
    <input type="submit" value="ubah">
    
=======
<?php
$koneksi= mysqli_connect('localhost','root','','belajar');
$query= "select * from mahasiswa where id='$_GET[id]'";
$hasil= mysqli_query($koneksi,$query);
$baris= mysqli_fetch_array($hasil);
?>
<form action="proses_ubah.php" method="post">
    id <input type="text" name="id" value="<?php echo $baris[0]?>"></br>
    nama <input type="text" name="nama" value="<?php echo $baris[1]?>"></br>
    <input type="submit" value="ubah">
    
>>>>>>> d6b94b3d99d07da055ec4f8907159f8e0bd6de1a
</form>