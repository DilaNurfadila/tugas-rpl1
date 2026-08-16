<?php 
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <h1><center>DAFTAR DOKTER RUMAH SAKIT UMUM APA</center></h1>
    <table border="1" cellpadding="5px" align="center">
        <tr align="center" style="font-size: 18px">
            <td>Kode Dokter</td>
            <td>Nama Dokter</td>
            <td>Alamat</td>
            <td>Telepon</td>
            <td>Spesialis</td>
            <td colspan="2">Tindakan</td>
        </tr>
        <?php 
            $sql="select * from tb_dokter";
            $sql2=mysqli_query($konek, $sql);
            while($hasil=mysqli_fetch_array($sql2)){
                $id=$hasil['kode_dokter'];
                echo "<tr align='center' style='font-size: 18px'>";
                    echo "<td>".$hasil['kode_dokter']."</td>";
                    echo "<td>".$hasil['nama_dokter']."</td>";
                    echo "<td>".$hasil['alamat']."</td>";
                    echo "<td>".$hasil['telepon']."</td>";
                    echo "<td>".$hasil['spesialis']."</td>";
                    echo "<td><a href=\"proses_hapus.php?id=$id\""."onClick=\"return confirm('Hapus Data?')\"".">Hapus</a></td>\n";
                    echo "<td><a href=\"edit.php?id=$id\">Update</a></td>\n";
                echo "</tr>";
            }
        ?>
    </table>
    <center><a href="insert.php">Tambah Data Dokter</a></center>
</body>
</html>