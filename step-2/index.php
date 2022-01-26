<?php

// 1. ini adalah komentar
/* 
    ini adalah komentar multi line
    #komentar
*/

// 2. Standard Output
/*
echo "Theis Andatu"; 
print "Theis Andatu"; 

print_r("Theis Andatu");
var_dump("Theis Andatu");
*/

// 3. Sintaks PHP
/* 
    1. PHP di dalam HTML
    2. HTML di dalam PHP
*/

?>

<!-- 1. PHP di dalam HTML -->

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h2>Halo Bro <?php echo "Theis Andatu" ?></h2>
</body>
</html>
-->

<!-- 2. HTML di dalam PHP -->

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
        echo "<h1>Halo Broo Theis</h1>";
    ?>
</body>
</html>
-->



<!-- 4. Variable dan Tipe Data -->

<?php

// $first_name = "Theis";
// $last_name = "Andatu";

// echo "Halo broo $first_name $last_name";
// echo 'Halo broo $first_name $last_name';

?>

<!-- 5. Operator -->

<?php

// Aritmatika
/*
$angka_pertama = 70;
$angka_kedua = 30;
$jumlah = $angka_pertama + $angka_kedua;

echo "Hasil dari $angka_pertama + $angka_kedua = $jumlah"
*/

// Concatenation
/*
$nama_depan = "Theis";
$nama_belakang = "Andatu";

echo "Hai, nama kamu $nama_depan $nama_belakang ya";
echo $nama_depan . " " . $nama_belakang;
*/

// Assignment
/*
 = , +=, .= , dll
$x = 4;
$x = 5; 
$x += 1; // 6

echo $x;

$y = "Theis";
$y .= " ";
$y .= "Andatu";

echo $y;
*/

// Perbandingan

/*
var_dump(4 == 5);
var_dump(4 > 5);
var_dump(4 <= 5);
var_dump("5" <= 5);
*/

// Identitas (mengecek dengan tipe data value/pembanding sekalian)
/*
var_dump(4 === 5);
var_dump(4 !== 5);
var_dump("5" === 5);
*/

// Logika
/*
$x = 10;
var_dump($x < 20 && $x == 10);
var_dump($x > 20 || $x == 10);
var_dump($x > 20 || $x !== 10);
*/
?>