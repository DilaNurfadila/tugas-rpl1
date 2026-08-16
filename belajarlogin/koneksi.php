<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "latihan_login";

    $konek = mysqli_connect($server, $username, $password);

    if($konek){
        $pilih = mysqli_select_db($konek, $db);
    }else{
        echo mysql_error();
    }
?>