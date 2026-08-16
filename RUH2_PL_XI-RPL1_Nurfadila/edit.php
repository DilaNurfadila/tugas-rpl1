<?php 

    include "koneksi.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $hasil=mysqli_query($konek,"select * from tb_dokter where kode_dokter='$id'");
        $baris=mysqli_fetch_array($hasil);

        $kode=$baris['kode_dokter'];
        $nama=$baris['nama_dokter'];
        $alamat=$baris['alamat'];
        $telepon=$baris['telepon'];
        $spesialis=$baris['spesialis'];
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
                <td>Nama Dokter</td>
                <td><input type="text" name='nama_dokter' size='25' value='<?= $nama; ?>'/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name='alamat' size='25' value='<?= $alamat; ?>'/></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name='telepon' size='25' value='<?= $telepon; ?>'/></td>
            </tr>
            <tr>
                <td>Spesialis</td>
                <td>
                    <select name="spesialis">
                        <option value="hewan">Hewan</option>
                        <option value="mata">Mata</option>
                        <option value="jantung">Jantung</option>
                        <option value="penyakitdalam">Penyakit Dalam</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name='submit' value='simpan'/></td>
            </tr>
        </table>
    </form>
</body>
<a href="index.php">home</a>
</html>