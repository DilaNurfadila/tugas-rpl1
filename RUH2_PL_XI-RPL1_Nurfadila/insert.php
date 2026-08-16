<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Insert Data</h1>
    <form action="proses_insert.php" method="post">
        <table>
            <tr>
                <td>Nama Dokter</td>
                <td><input type="text" name="nama_dokter" size="25"/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" size="25"/></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon" size="25"/></td>
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
                <td colspan="2" align="right"><input type="submit" name="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
<a href="index.php">home</a>
</html>