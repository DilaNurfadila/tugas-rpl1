<?php 
	include "koneksi.php";
 ?>
 <!DOCTYPE html>
 <html>
 	<body>
 			<tr>
				<td align="center"><a href="index.php">Beranda</a></td>
			</tr>
			<tr>
				<td align="center"><a href="tambah.php">Tambah Data</a></td>
			</tr>
		<h1><center>Data Karyawan</center></h1>
		<table border="1" cellpadding="5px" align="center">
			<tr align="center" style="font-size: 18px">
				<td>Kode Karyawan</td>
				<td>Nama Karyawan</td>
				<td>Alamat</td>
				<td>Jenis Kelamin</td>
				<td>Jabatan</td>
				<td colspan="2">Opsi</td>
			</tr>
			<?php 
				$sql = "select * from karyawan";
				$sql2 = mysqli_query($konek,$sql) or die (mysql_error());
				while($hasil= mysqli_fetch_array($sql2)){
					$id = $hasil['kode'];
					echo "<tr align='center' style='font-size: 18px'>";
						echo "<td>".$id."</td>";
						echo "<td>".$hasil['nama']."</td>";
						echo "<td>".$hasil['alamat']."</td>";
						echo "<td>".$hasil['jenis_kelamin']."</td>";
						echo "<td>".$hasil['jabatan']."</td>";
						echo "<td><a href=\"edit.php?kode=$id\">Edit</a></td>\n";
						echo "<td><a href=\"proses_hapus.php?kode=$id\""."onClick=\"return confirm('Hapus Data?')\"".">Hapus</a></td>\n";
					echo "</tr>";
				}
			 ?>
		</table> 
 	</body>
 </html>