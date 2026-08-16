<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Buku Tamu</title>
</head>
<body>
    <table align="center" border="1">
        <tr>
            <th align="center" colspan="9">BUKU TAMU</th>
        </tr>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis kelamin</td>
            <td>Alamat</td>
            <td>Instansi</td>
            <td>Jam masuk</td>
            <td>Tanggal</td>
            <td colspan="2">Action</td>
        </tr>
        <?php
            include "koneksi.php";
            $kueri = mysqli_query($connection, "select * from buku_tamu");
            $i = 1;
            while ($row = mysqli_fetch_array($kueri)) {
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php echo $row[4] ?></td>
            <td><?php echo $row[5].date("H:i:s") ?></td>
            <td><?php echo $row[6].date("Y-m-d") ?></td>
            <td><a href="update_bukutamu.php?edit=<?php echo $row[0] ?>">Edit</a></td>
            <td><a href="#" onClick="Confirmation(<?php echo $row[0] ?>)">Hapus</a></td>
        </tr>
        <?php
            $i++;
            }
        ?>
        <tr>
            <td align="center" colspan="9"><a href="bukutamu.php">Tambah</a></td>
        </tr>
    </table>
</body>
</html>
<script>
    function Confirmation(id){
        var txt;
        if(confirm("Anda yakin ingin mengapusnya?")){
            window.location.href = "proses_delete.php?delete"=+id;
            return;
        }
        return;
    }
</script>