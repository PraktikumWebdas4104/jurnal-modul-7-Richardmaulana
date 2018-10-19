<?php

	include 'koneksi.php';
	$search = $_GET['search'];
	$qry = mysqli_query($koneksi,"SELECT * FROM mahasiswa where nim =$search");

	echo "<center><h1>Data yang Dicari</h1>";
	echo "<table border=1 style='border: 3px solid; width:50%'>
		<tr>
			<th>Nama</th>
			<th>Nim</th>
			<th>Action</th>
		</tr>";

	foreach ($qry as $row) {
		echo "<tr>
				<td align=center>$row[nama]</td>
				<td align=center>$row[nim]</td>
				<td align=center><a href='delete.php?nim=$row[nim]'>Delete</a></td>
			  </tr>
			</table>";
	}
?>