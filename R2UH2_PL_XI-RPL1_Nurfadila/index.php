<?php
    // menghubungkan file index ke koneksi yang terpisah dari file index
    // bisa menggunakan require atau include
    include 'functions.php';
    $pelanggan = query("SELECT * FROM restoran");
    
    // jika tombol cari ditekan
    if (isset($_POST["cari"])){
        $pelanggan = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Pemesanan</h1>
    <a href="tambah.php">Tambah data pemesanan</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size=25 placeholder = "Masukan keyword pencarian" autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Aksi</th>
            <th>Kode Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Jenis Pemesanan</th>
            <th>Menu Pesanan</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php foreach ($pelanggan as $row): ?>
        <tr>
            <td>
                <a href="hapus.php?kode_pelanggan=<?= $row["kode_pelanggan"]; ?>" onclick="return confirm ('yakin?')">Hapus</a> |
                <a href="edit.php?kode_pelanggan=<?= $row["kode_pelanggan"]; ?>">Edit</a>
            </td>
            <td><?= $row["kode_pelanggan"]; ?></td>
            <td><?= $row["nama_pelanggan"]; ?></td>
            <td><?= $row["jenis_pemesanan"]; ?></td>
            <td><?= $row["menu_pesanan"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["jumlah"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>