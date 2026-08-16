<?php 
    include 'functions.php';

    // ambil data di URL
    $kode = $_GET["kode_pelanggan"];
    
    // query data restoran berdasarkan kode pelanggan
    $pel = query("SELECT * FROM restoran WHERE kode_pelanggan = $kode")[0];

    // cek apakah tombol submit sudah ditekan atau belum
    if ( isset($_POST["submit"]) ){
        // cek apakah data berhasil diubah atau tidak
        // if(edit($_POST) > 0){
        //     echo "
        //         <script>
        //             alert('pesanan berhasil diedit');
        //             document.location.href = 'index.php';
        //         </script>
        //     ";
        // } else {
        //     echo "
        //     <script>
        //         alert('pesanan gagal diedit');
        //         document.location.href = 'index.php';
        //     </script>
        // ";
        // }
        var_dump($pel);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data pesanan</title>
</head>
<body>
    <h1>Edit data pesanan</h1>
    <form action="" method="post">
    <input type="hidden" name="kode" value="<?= $pel["kode"]; ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" autocomplete="off" value="<?= $pel["nama_pelanggan"]; ?>" required></td>
            </tr>
            <tr>
                <td>Jenis Pemesanan</td>
                <td>:</td>
                <td>
                    <select name="jenis">
                        <option value="Makanan" <?php if($pel['jenis_pemesanan'] == 'Makanan'){echo 'selected';} ?>>Makanan</option>
                        <option value="Minuman" <?php if($pel['jenis_pemesanan'] == 'Minuman'){echo 'selected';} ?>>Minuman</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Menu Pesanan</td>
                <td>:</td>
                <td>
                    <select name="menu">
                        <option value="Ayam Goreng" <?php if($pel['menu_pesanan'] == 'Ayam Goreng'){echo 'selected';} ?>>Ayam Goreng</option>
                        <option value="Nasi Goreng" <?php if($pel['menu_pesanan'] == 'Nasi Goreng'){echo 'selected';} ?>>Nasi Goreng</option>
                        <option value="Ayam Bali" <?php if($pel['menu_pesanan'] == 'Ayam Bali'){echo 'selected';} ?>>Ayam Bali</option>
                        <option value="Ayam Serundeng" <?php if($pel['menu_pesanan'] == 'Ayam Serndeng'){echo 'selected';} ?>>Ayam Serndeng</option>
                        <option value="dll" <?php if($pel['menu_pesanan'] == 'dll'){echo 'selected';} ?>>dll</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" autocomplete="off" value="<?= $pel["harga"]; ?>" required></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" autocomplete="off" value="<?= $pel["jumlah"]; ?>" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Edit Data</button></td>
            </tr>
        </table>
    </form>
</body>
</html>