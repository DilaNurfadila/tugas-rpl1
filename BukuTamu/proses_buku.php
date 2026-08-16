<?php
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jk = $_POST['jk'];
    $jurusan = $_POST['jurusan'];
    $hobi = $_POST['hobi'];
    $pesan = $_POST['pesan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilan Buku Tamu</title>
</head>
<body>
    <h3>Isi Buku Tamu :</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><?php echo $nis; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jk; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo $jurusan; ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?php
                if(!empty($hobi)){
                    echo "<ul>";
                    foreach ($hobi as $value) {
                        echo "<li>$value</li>";
                    }
                    echo "</ul>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td><?php echo $pesan; ?></td>
        </tr>
    </table>
</body>
</html>