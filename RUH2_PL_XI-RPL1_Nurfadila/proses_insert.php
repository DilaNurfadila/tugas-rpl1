<?php 
    include "koneksi.php";
    if(isset($_POST['submit'])){
        $nama=$_POST['nama_dokter'];
        $alamat=$_POST['alamat'];
        $telepon=$_POST['telepon'];
        $spesialis=$_POST['spesialis'];

        mysqli_query($konek, "insert into tb_dokter(nama_dokter, alamat, telepon, spesialis) values ('$nama','$alamat','$telepon','$spesialis')") or die (mysql_error());
        header('location: index.php');
    }
?>