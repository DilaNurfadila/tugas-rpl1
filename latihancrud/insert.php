<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Insert Data</h1>
    <form action="proses_insert.php" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" size="25"/></td>
            </tr>
            <tr>
                <td>Total Barang</td>
                <td><input type="text" name="total_barang" size="25"/></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type="text" name="harga_satuan" size="25"/></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
<a href="index.php">home</a>
</html>