<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_GET['edit'])){
            include "koneksi.php";

            $id_edit = intval($_GET['edit']);
            $kueri = mysqli_query($connection, "select * from buku_tamu WHERE no = $id_edit LIMIT 1");
            $row = mysqli_fetch_array($kueri);
        }

        $id_edit = $row['no'];
        $nama = $row['nama'];
        $jk = $row['jk'];
        $alamat = $row['alamat'];
        $Instansi = $row['instansi'];
    ?>
    <form action="proses_update.php?update" method="post" name="bukutamu">
    <input type="hidden" name="id_table" value="<?= $id_edit ?>">
        <table align="center">
            <tr>
                <th colspan="3"><h3>BUKU TAMU</h3></th>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama anda" value="<?= $nama ?>"></td>
            </tr>
            <tr>
                <td valign="top">Jenis kelamin</td>
                <td valign="top">:</td>
                <td>
                    <input type="radio" name="jk" value="Pria" <?php echo ($jk == 'Pria') ? "cheked" :""; ?>/>Pria<br>
                    <input type="radio" name="jk" value="Wanita" <?php echo ($jk == 'Wanita') ? "cheked" :""; ?>/>Wanita
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" placeholder="Alamat anda" value="<?= $alamat ?>"></td>
            </tr>
            <tr>
                <td>Instansi</td>
                <td>:</td>
                <td><input type="text" name="ins" placeholder="Instansi anda" value="<?= $Instansi ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="update" value="Simpan"></td>
                <td>
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center"><a href="tampil_bukutamu.php">Lihat Buku Tamu</a></td>
            </tr>
        </table>
    </form>
</body>
</html>