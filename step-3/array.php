<!-- 4. Array Numeric / Tempat menyimpan banyak nilai

	1. Array Numeric
	2. Array Asociative

 -->

 <?php

// Cara membuat Array

    // Cara lama:
    $nama = array('theis', 'jhon', 'darius');

    // Cara baru:
    $bulan = ['Januari', 'Februari', 'April'];


// Menampilkan Array
    // var_dump & print_r

    var_dump($nama);
    print_r($nama);


    var_dump($bulan);
    print_r($bulan);


// Menampilkan 1 elemen pada Array

    echo $nama[1];
    echo $bulan[0];


// Menambahkan elemen baru pada Array

    print_r($bulan);
    $bulan[] = "Mei";
    print_r($bulan);

 ?>

 <?php

$numbers = [11, 25, 29, 2, 5, 13, 17];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            color: white;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear:both;
        }
    </style>
</head>
<body>

    <!-- Cara 1: menampilkan isi array dengan For -->
    <?php for ( $i = 0; $i < count($numbers); $i++ ) { ?>

        <div class="kotak">
            <?= $numbers[$i] ?>
        </div>

    <?php } ?>

    <div class="clear"></div>

    <!-- Cara 2: menampilkan isi array dengan Foreach -->

    <?php foreach ( $numbers as $number ) { ?>

        <div class="kotak">
            <?= $number ?>
        </div>

    <?php } ?>

    <div class="clear"></div>

    <!-- Cara 3: Menampilkan isi array dengan Foreach tapi dengan style Templating -->

    <?php foreach ($numbers as $number) : ?>

        <div class="kotak">
            <?= $number  ?>
        </div>

    <?php endforeach; ?>
    

</body>
</html>


<!-- CONTOH PENERAPAN ARRAY DENGAN FOREACH -->
<?php

$mahasiswa = [
    ["Theis Andatu", "05211940007003", "Sistem Informasi", "theisandatu@gmail.com"],
    ["Darius Andatu", "05211940007001", "Manajemen Bisnis", "dariusandatu@gmail.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Mahasiswa ITS</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li> Nama:
                <?= $mhs[0] ?>
            </li>
            <li> NRP:
                <?= $mhs[1] ?>
            </li>
            <li> Jurusan:
                <?= $mhs[2] ?>
            </li>
            <li> Email:
                <?= $mhs[3] ?>
            </li>
            
        </ul>
    <?php endforeach; ?>
</body>
</html>