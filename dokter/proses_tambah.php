<?php 
	include "koneksi.php";
	if(isset($_POST['submit']))
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];
		$spesial = $_POST['spesial'];


		mysqli_query($konek, "insert into dokter(kode, nama, alamat, telepon, spesial) values ('$kode','$nama','$alamat','$telepon','$spesial')") or die (mysql_error());
		header('location:index.php');
 ?>