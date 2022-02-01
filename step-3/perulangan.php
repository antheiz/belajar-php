
<!-- 1. Pengulangan:
 
    1. for
    2. while
    3. do.. while
    4. foreach (spesifik untuk array)

 -->

<?php

// for ( $i = 0; $i < 10; $i++ ) {
//     echo "Hello, World! <br>";
// }

// $i = 0;
// while ($i < 10) {
//     echo "Hello, World! <br>";
//     $i++;
// }


// $i = 0;
// do {
//     echo "Hello, World! <br>";
//     $i++;
// } while ($i < 10);

?>

<!-- CONTOH PENGGUNAAN PERULANGAN -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perulangan</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="10">

        <!-- Cara 1 --> 
        <?php
            // for ($i = 1; $i <= 5; $i++) { // perulangan untuk baris
            //     echo "<tr>";

            //     for ($j = 1; $j <= 5; $j++) { // perulangan untuk kolom
            //         echo "<td>$i,$j</td>";
            //     }

            //     echo "</tr>";
            // }
        ?> 


        <!-- Cara 2 -->
        <?php //for ($i = 1; $i <= 3; $i++) { ?>

            <!-- <tr> -->
                <?php // for ($j = 1; $j <= 4; $j++) { ?>
                    <!-- <td> <?php // echo "$i, $j" ?> </td> -->
                <?php // } ?>
            <!-- </tr> -->

        <?php // } ?>


        <!-- Cara 3 -->
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 4; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>  <!-- Cara cepat tanpa echo gunakan "=" -->
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>

    </table>
</body>
</html>

