<?php 
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<body>
	<form method="POST" action="proses_tambah.php" name="obat">
		<table align="center">
			<tr>
				<td align="center" colspan="3"><a href="index.php">Beranda</a></td>
			</tr>
			<tr>
				<td align="center" colspan="3"><a href="tambah.php">Tambah Data</a></td>
			</tr>
			<th colspan="3"><h2>Tambah Data Obat</h2></th>
			<tr>
				<td>Kode Obat</td>
				<td>:</td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Nama obat</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
	    		<td>Jenis Obat</td>
	    		<td>:</td>
	    		<td><select name="jenis">
	    			<option value="Analgesik">Analgesik</option>
	    			<option value="Agemimunosupresif">Agemimunosupresif</option>
					<option value="Laksatif">Laksatif</option>
					<option value="Statin">Statin</option>
					<option value="Vaksin">Vaksin</option>
	    		</select></td>
	    	</tr>
			<tr>
	    		<td>Harga</td>
	    		<td>:</td>
	    		<td><input type="text" name="harga"></td>
	   		</tr>
	   		<tr>
	    		<td>Jumlah</td>
	    		<td>:</td>
	    		<td><input type="text" name="jumlah"></td>
	   		</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>