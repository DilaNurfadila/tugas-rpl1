<?php
// Mengecek apakah tidak ada data di $_GET
if (!isset ($_GET["nama"]) ||
    !isset ($_GET["kelas"]) ||
    !isset ($_GET["jurusan"])){
    // Redirect
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Siswa</title>
</head>
<body>
    <h1>Detail Data Siswa</h1>
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["kelas"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke laman utama</a>
</body>
</html>