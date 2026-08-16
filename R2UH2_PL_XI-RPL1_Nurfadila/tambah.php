<?php 
    include 'functions.php';

    // cek apakah tombol submit sudah ditekan atau belum
    if ( isset($_POST["submit"]) ){
        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
        }

        // query insert data
        // $query = "INSERT INTO siswa VALUES
        //             (NULL, '$nis', '$nama', '$kelas', '$jurusan', '$email')
        //         ";
        // mysqli_query($db, $query);

        // return mysqli_affected_rows($db);

        // if(mysqli_affected_rows($db) > 0){
        //     echo "Berhasil";
        // } else {
        //     echo "Gagal";
        //     echo "<br>";
        //     echo mysqli_error($db);
        // }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data pesanan</title>
</head>
<body>
    <h1>Tambah data pesanan</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Jenis Pemesanan</td>
                <td>:</td>
                <td>
                    <select name="jenis">
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Menu Pesanan</td>
                <td>:</td>
                <td>
                    <select name="menu">
                        <option value="Ayam Goreng">Ayam Goreng</option>
                        <option value="Nasi Goreng">Nasi Goreng</option>
                        <option value="Ayam Bali">Ayam Bali</option>
                        <option value="Ayam Serundeng">Ayam Serndeng</option>
                        <option value="dll">dll</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Tambah Data</button></td>
            </tr>
        </table>
    </form>
</body>
</html>