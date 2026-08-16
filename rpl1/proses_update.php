<?php
    include "koneksi.php";

    if(isset($_POST["update"])){
        $nama = $_POST["nama"];
        $jk = $_POST["jk"];
        $alamat = $_POST["alamat"];
        $ins = $_POST["ins"];
        $id_table = intval($_POST('id_table')); // untuk men-convert ke integer
        $query = "UPDATE buku_tamu SET nama = '$nama', jk = '$jk', alamat = '$alamat', instansi = '$ins' WHERE no = $id_table";
        mysqli_query($connection, $query);
        header("location:bukutamu.php");
        return;
    }
?>