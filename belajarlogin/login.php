<?php 
    session_start();
    include "koneksi.php";

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = mysqli_query($konek, "select * from pengguna where username = '$user' and password = '$pass'");

    $hasil = mysqli_num_rows($sql);
    $data = mysqli_fetch_array($sql);

    if($hasil==1){
        $_SESSION['nama_user'] = $data['username'];
        $_SESSION['user'] = $data['nama'];
        header("Location: berhasil.php");
    }else{
        echo "username atau password anda salah";
    }
?>