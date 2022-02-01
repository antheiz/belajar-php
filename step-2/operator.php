<?php
// 5. Operator

// Aritmatika

$angka_pertama = 70;
$angka_kedua = 30;
$jumlah = $angka_pertama + $angka_kedua;

echo "Hasil dari $angka_pertama + $angka_kedua = $jumlah";


// Concatenation

$nama_depan = "Theis";
$nama_belakang = "Andatu";

echo "Hai, nama kamu $nama_depan $nama_belakang ya";
echo $nama_depan . " " . $nama_belakang;


// Assignment

// = , +=, .= , dll
$x = 4;
$x = 5; 
$x += 1; // 6

echo $x;

$y = "Theis";
$y .= " ";
$y .= "Andatu";

echo $y;


// Perbandingan


var_dump(4 == 5);
var_dump(4 > 5);
var_dump(4 <= 5);
var_dump("5" <= 5);


// Identitas (mengecek dengan tipe data value/pembanding sekalian)

var_dump(4 === 5);
var_dump(4 !== 5);
var_dump("5" === 5);


// Logika

$x = 10;
var_dump($x < 20 && $x == 10);
var_dump($x > 20 || $x == 10);
var_dump($x > 20 || $x !== 10);

?>