<?php 
	include "koneksi.php";
	if(isset($_GET['id'])){
		$id = $_GET['kode_pelanggan'];
		$hasil = mysqli_query($konek, "select * from karyawan where kode='$id'") or die (mysql_error());
		$baris = mysqli_fetch_array($hasil);

		$kode = $baris['kode'];
		$nama = $baris['nama'];
		$alamat = $baris['alamat'];
		$jk = $baris['jenis_kelamin'];
		$jabatan = $baris['jabatan'];
	}else{
		header('location:index.php');
	}
 ?>

<html>
	<body>
		<tr>
			<td align="center"><a href="index.php">Beranda</a></td>
			</tr>
			<tr>
				<td align="center"><a href="tambah.php">Menambahkan Data Baru</a></td>
			</tr>
		<h1>Edit Data</h1>
		<form action="proses_edit.php" method="POST">
			<table>
			<input type="hidden" name="kode" value="<?php echo "$kode"?>">
				<tr>
					<td>Nama Karyawan</td>
					<td><input type="text" name="nama" size="25" value="<?php echo "$nama" ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" size="25" value="<?php echo "$alamat" ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><select name="jk">
						<option <?php if ($jk=="Laki-laki"){echo "selected";} ?>>Laki-laki</option>
						<option <?php if ($jk=="Perempuan"){echo "selected";} ?>>Perempuan</option>
					</select></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td><select name="jabatan">
						<option <?php if ($jabatan=="Manager"){echo "selected";} ?>>Manager</option>
						<option <?php if ($jabatan=="Direktur"){echo "selected";} ?>>Direktur</option>
						<option <?php if ($jabatan=="HRD"){echo "selected";} ?>>HRD</option>
					</select></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="simpan"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>