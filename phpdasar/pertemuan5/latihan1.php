<!--
== Array ==
> Variabel yang dapat memiliki banyak nilai

> Elemen pada array boleh memiliki tipe data yang berbeda
Contoh:
$arr1 = [Value, "Value", Value];

> Pasangan antara key dan value
> Key-nya adalah index, yang dimulai dari 0

== Membuat array ==
=> Cara lama
$hari = array("Value", "Value", "Value");

=> Cara baru
$bulan = ["Value", "Value", "Value"];

-->

<?php
// Menampilkan Array
// var_dump() / print_r()

$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// var_dump($hari);
// Result
// array(3) {
//   [0]=>
//   string(5) "Senin"
//   [1]=>
//   string(6) "Selasa"
//   [2]=>
//   string(4) "Rabu"
// }

// echo "<br>";
// print_r($bulan);
// echo "<br>";
// Result
// Array
// (
//     [0] => Januari
//     [1] => Februari
//     [2] => Maret
// )

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>