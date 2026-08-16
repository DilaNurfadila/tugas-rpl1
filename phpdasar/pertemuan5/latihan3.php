<?php
$siswa = [
        ["Nurfadila", "XI-RPL 1", "101817028"], 
        ["Alya Nur Aini", "XI-RPL 1", "101284003"],
        ["Chikal Lyra Saeni Putri", "XI-RPL 1", "101284008"]
            ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <!-- <?php foreach ($siswa as $sis) : ?>
        <ul>
            <li><?= $sis; ?></li>
        </ul>
    <?php endforeach; ?> -->

    <?php foreach ($siswa as $sis) : ?>
        <ul>
            <li><?= $sis[0]; ?></li>
            <li><?= $sis[1]; ?></li>
            <li><?= $sis[2]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>