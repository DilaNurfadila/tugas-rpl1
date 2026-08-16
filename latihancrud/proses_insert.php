<?php 
    include "koneksi.php";
    if(isset($_POST['submit'])){
        $nama=$_POST['nama_barang'];
        $total=$_POST['total_barang'];
        $harga=$_POST['harga_satuan'];

        mysqli_query($konek, "insert into barang(nama_barang, total_barang, harga_satuan) values ('$nama','$total','$harga')") or die (mysql_error());
        header('location: index.php');
    }
?>