<?php

	include 'koneksi.php';
	$nim = $_GET['nim'];

	$qry = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim=$nim");
	echo "Data Berhasil Dihapus";
	echo "<button name='kirim'><a href='lihatdata.php'>Lihat Data</button></a>";

?>