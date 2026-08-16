<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukut Tamu</title>
</head>
<body>
    <h3>Silahkan isi buku tamu</h3>
    <form action="proses_buku.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"/></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis"/></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-laki"/>Laki-laki<br>
                <input type="radio" name="jk" value="Perempuan"/>Perempuan<br>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan">
                        <option value="Analis Kimia">Analis Kimia</option>
                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Ngoding"/>Ngoding<br>
                    <input type="checkbox" name="hobi[]" value="Kepo"/>Kepo<br>
                    <input type="checkbox" name="hobi[]" value="Facebook-an"/>Facebook-an<br>
                    <input type="checkbox" name="hobi[]" value="Ngaji"/>Ngaji<br>
                </td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>:</td>
                <td>
                    <textarea name="pesan" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan = 3 align="right">
                <input type="submit" value="kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>