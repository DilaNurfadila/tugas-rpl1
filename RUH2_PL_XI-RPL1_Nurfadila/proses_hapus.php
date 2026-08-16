<?php 
    include "koneksi.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $hasil=mysqli_query($konek,"delete from tb_dokter where kode_dokter='$id'") or die (mysql_error());
        header('location:index.php');
    }
?>