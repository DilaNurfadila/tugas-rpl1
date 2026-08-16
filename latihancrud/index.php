<?php 
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <h1><center>DAFTAR BARANG BORMA CABANG ANTAPANI</center></h1>
    <table border="1" cellpadding="5px" align="center">
        <tr align="center" style="font-size: 18px">
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Total Barang</td>
            <td>Harga Satuan</td>
            <td colspan="2">Tindakan</td>
        </tr>
        <?php 
            $sql="select * from barang";
            $sql2=mysqli_query($konek, $sql) or die (mysql_error());
            while($hasil=mysqli_fetch_array($sql2)){
                $id=$hasil['no'];
                echo "<tr align='center' style='font-size: 18px'>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$hasil['nama_barang']."</td>";
                    echo "<td>".$hasil['total_barang']."</td>";
                    echo "<td>".$hasil['harga_satuan']."</td>";
                    echo "<td><a href=\"proses_hapus.php?id=$id\""."onClick=\"return confirm('Hapus Data?')\"".">Hapus</a></td>\n";
                    echo "<td><a href=\"edit.php?id=$id\">Update</a></td>\n";
                echo "</tr>";
            }
        ?>
    </table>
    <center><a href="insert.php">Tambah Data Barang</a></center>
</body>
</html>