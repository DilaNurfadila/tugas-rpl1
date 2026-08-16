<?php 

    include "koneksi.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $hasil=mysqli_query($konek,"select * from barang where no='$id'") or die (mysql_error());
        $baris=mysqli_fetch_array($hasil);

        $no=$baris['no'];
        $nama=$baris['nama_barang'];
        $total=$baris['total_barang'];
        $harga=$baris['harga_satuan'];
    }else{
        header('location: insert.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Ubah Data</h1>
    <form action="proses_edit.php" method="post">
        <table>
            <tr>
                <td>No</td>
                <td><input type="text" name='nomor' size='25' value='<?= $no; ?>'/></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name='nama_barang' size='25' value='<?= $nama; ?>'/></td>
            </tr>
            <tr>
                <td>Total Barang</td>
                <td><input type="text" name='total_barang' size='25' value='<?= $total; ?>'/></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type="text" name='harga_satuan' size='25' value='<?= $harga; ?>'/></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name='submit' value='simpan'/></td>
            </tr>
        </table>
    </form>
</body>
<a href="index.php">home</a>
</html>