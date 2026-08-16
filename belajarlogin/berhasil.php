<?php 
    session_start();
    include "koneksi.php";

    if(isset($_SESSION['nama_user'])){
        echo "<h2>Anda login sebagai ".$_SESSION['nama_user'],"</h2>";

        echo "<h2>Hallo ".$_SESSION['user'],"</h2>";
?>

<a href="logout.php">Logout</a>

<?php 
    }else{
        session_destroy();
        header("Location: index.php");
    }
?>