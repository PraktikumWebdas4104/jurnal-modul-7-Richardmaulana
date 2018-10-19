<?php

	include 'koneksi.php';
	$qry = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
	

	echo "<center><h1>Data</h1><br><br>";
	echo "<form method='POST'>Cari Data (Nim) :<input type='text' name='search'><input type='submit' name='cari'><br><br></form>";
	echo "<table border=1 style='border: 3px solid; width:60%;'>
		<tr>
			<th>Nama</th>
			<th>Nim</th>
			<th>Jenis Kelamin</th>
			<th>Program Studi</th>
			<th>Fakultas</th>
			<th>Asal</th>
			<th>Moto Hidup</th>
			<th>Action</th>
		</tr>";	

	foreach ($qry as $row) {
		echo "<tr>
				<td>$row[nama]</td>
				<td>$row[nim]</td>
				<td>$row[gender]</td>
				<td>$row[prodi]</td>
				<td>$row[fakultas]</td>
				<td>$row[asal]</td>
				<td>$row[motohidup]</td>
				<td><a href='delete.php?nim=$row[nim]'>Delete</a></td>
			  </tr>";

	}

	if (isset($_POST['cari'])) {
		$search = $_POST['search'];

		if ($search==$row['nim']) {
			echo "Lihat <a href='cari.php?search=$row[nim]'>Data</a>";
		}
	}
	else{
		echo "Data tidak ditemukan";
	}
?>