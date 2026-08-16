<!--
    == Associative Array ==
Definisinya sama seperti array numerik, kecuali
key-nya adalah string yang kita buat sendiri
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 2</title>
</head>
<body>
    <?php
        $siswa = [
            [
                "nama" => "Nurfadila",
                "kelas" => "XI-RPL 1",
                "jurusan" => "Rekayasa Perangkat Lunak",
                "gambar" => "Kucing1.jpg"
            ],
            [
                "nama" => "Alya Nur Aini",
                "kelas" => "XI-RPL 1",
                "jurusan" => "Rekayasa Perangkat Lunak",
                "gambar" => "Kucing2.jpg"
            ]
        ];
    ?>

    <h1>Data Siswa</h1>
    <!-- <?= $siswa[1]["tugas"][1]; ?> -->
    <?php foreach ($siswa as $sis) : ?>
        <ul>
            <li>
                <img src="img/<?= $sis ["gambar"]; ?>">
            </li>
            <li>Nama :<?= $sis["nama"] ?></li>
            <li>Kelas :<?= $sis["kelas"] ?></li>
            <li>Jurusan :<?= $sis["jurusan"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>