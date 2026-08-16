<?php
    include "koneksi.php";

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $jk = $_POST["jk"];
        $alamat = $_POST["alamat"];
        $ins = $_POST["ins"];
        $time = $_POST["H:i:s"];
        $date = $_POST["Y-m-d"];

        mysqli_query($connection, "insert into buku_tamu (nama, jk, alamat, instansi, jam_masuk, tgl_masuk)
        values ('$nama','$jk','$alamat','$ins','$time','$date')");

        header("location:bukutamu.php");
    }
?>