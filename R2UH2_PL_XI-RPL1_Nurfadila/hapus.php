<?php 
    include 'functions.php';

    $kode = $_GET["kode_pelanggan"];

    if(hapus($kode) > 0){
        echo "
                <script>
                    alert('pesanan berhasil dihapus');
                    document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('pesanan gagal dihapus');
                    document.location.href = 'index.php';
                </script>
            ";
    }
?>