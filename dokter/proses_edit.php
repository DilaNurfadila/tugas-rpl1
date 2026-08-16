<?php 
	include "koneksi.php";
	if(isset($_POST['submit']))
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jenis_kelamin'];
		$jabatan = $_POST['jabatan'];

		mysqli_query($konek, "update karyawan set nama='$nama', alamat='$alamat', jenis_kelamin='$jk', jabatan='$jabatan' where kode ='$kode' ") or die (mysql_error());
		header('location:index.php');
	
 ?>