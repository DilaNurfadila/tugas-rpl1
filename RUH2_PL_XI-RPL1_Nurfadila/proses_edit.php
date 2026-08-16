<?php 
    include "koneksi.php";
    if(isset($_POST['submit'])){
        $nama=$_POST['nama_dokter'];
        $alamat=$_POST['alamat'];
        $telepon=$_POST['telepon'];
        $spesialis=$_POST['spesialis'];

        mysqli_query($konek,"update tb_dokter set nama_dokter='$nama',alamat='$alamat',telepon='$telepon',spesialis='$spesialis' where kode_dokter='$kode'");
        header('location: index.php');
    }
?>