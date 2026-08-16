<?php 
    include "koneksi.php";
    if(isset($_POST['submit'])){
        $no=$_POST['nomor'];
        $nama=$_POST['nama_barang'];
        $total=$_POST['total_barang'];
        $harga=$_POST['harga_satuan'];

        mysqli_query($konek,"update barang set nama_barang='$nama',total_barang='$total',harga_satuan='$harga' where no='$no'") or die (mysql_error());
        header('location: index.php');
    }
?>