<?php
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilx(){
//     global $x; // berfungsi untuk mencari inisialisasi variabel diluar lingkup variabel
//     echo $x;
// }

// tampilx();

// SUPERGLOBALS
// Variabel global milik PHP
// Merupakan Array Associative

// Macam - macam SUPERGLOBALS
// => $_GET
// => $_POST
// => $_REQUEST
// => $_SESSION
// => $_COOKIE
// => $_SERVER
// => $_ENV

// var_dump ($_SERVER);
// echo "<br>";
// echo "<br>";
// echo $_SERVER ["SERVER_NAME"];

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>
    <?php foreach ($siswa as $sis) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $sis["nama"]; ?>
                &kelas=<?= $sis["kelas"]; ?>
                &jurusan=<?= $sis["jurusan"]; ?>"><?= $sis["nama"]; ?></a>
            </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
