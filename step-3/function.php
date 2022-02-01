<!-- 3. Function

   1. built-in function
   2. user defined function

-->

<?php
    // 1. Build-in Function (for date/time)


    // DATE
    echo date("l, d - M - Y");

    echo "<br>";

    // TIME or unix timestamp
    echo date("l", time()+60*60*24);

    echo "<br>";

    // MKTIME
    // mktime(detik, menit, jam, bulan, tanggal, tahun)
    echo date("l", mktime(0, 0, 0, 11, 14, 2001));

    echo "<br>";

    // STRTOTIME
    echo date("l", strtotime("01 Feb 2022"))

?>

<?php

    // 2. User Defined Function

    function salam($waktu = "datang", $nama = "Tamu") {
        return "Selamat $waktu, $nama!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>
    
    <h1>

        <?= salam("Pagi", "Theis") ?>

    </h1>

</body>
</html>