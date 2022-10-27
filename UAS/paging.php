<head>
	 
</head>
<?php 
include 'koneksi.php';

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM karyawan");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;

if (isset($_GET['cari'])) {
	$cari = $_GET['cari'];

	$data = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nama LIKE '%".$cari."%'");
}else{
	$data = mysqli_query($koneksi, "SELECT * FROM karyawan");
}

while ($row=mysqli_fetch_array($data_karyawan)) {
	
 ?>

  <tr>
                                         
    <td><?php echo $row['NIK']; ?></td>
    <td><?php echo $row['Nama']; ?></td>
    <td><?php echo $row['Kode_Departement']; ?></td>
    <td><?php echo $row['Gender']; ?></td>
    <td><?php echo $row['Gaji_pokok']; ?></td>
    <td><?php echo $row['Tunjangan']; ?></td>
    <td><a href="karyawan_edit.php?NIK=<?php echo $row['NIK']; ?>"><button class="btn btn-primary">Ubah</button></a>
    <a href="hapus.php?NIK=<?php echo $row['NIK']; ?>"><button class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?');">Hapus</button></a></td>
</tr>
    <?php } ?>

