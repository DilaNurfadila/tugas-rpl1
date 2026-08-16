<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="proses_bukutamu.php" method="post" name="bukutamu">
        <table align="center">
            <tr>
                <th colspan="3"><h3>BUKU TAMU</h3></th>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama anda"></td>
            </tr>
            <tr>
                <td valign="top">Jenis kelamin</td>
                <td valign="top">:</td>
                <td>
                    <input type="radio" name="jk" value="Pria"/>Pria<br>
                    <input type="radio" name="jk" value="Wanita"/>Wanita
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" placeholder="Alamat anda"></td>
            </tr>
            <tr>
                <td>Instansi</td>
                <td>:</td>
                <td><input type="text" name="ins" placeholder="Instansi anda"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Input"></td>
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