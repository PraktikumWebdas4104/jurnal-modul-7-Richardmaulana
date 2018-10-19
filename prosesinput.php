<?php
	include "koneksi.php";

	if (isset($_POST["submit"])) {
		if ($koneksi) {
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$jekel = $_POST['jekel'];
			$prodi = $_POST['prodi'];
			$fakultas = $_POST['fakultas'];	
			$asal = $_POST['asal'];
			$mthidup = $_POST['moto'];

			$sql = $koneksi -> query("
								INSERT INTO `mahasiswa` (`nama`,`nim`,`gender`,`prodi`,`fakultas`,`asal`,`motohidup`) 
								VALUES ('$nama','$nim','$jekel','$prodi','$fakultas','$asal','$mthidup')
								");
			echo "Registrasi Berhasil <a href='lihatdata.php'></a>";

		}
		else{
			echo "Registrasi GAGAL";
		}
	}
?>