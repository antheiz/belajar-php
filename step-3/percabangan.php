<!-- 2. Pengkondisian/percabangan:    

   1. if.. else
   2. if.. else if.. else
   3. ternary
   4. switch

-->

<?php

// IF.. ELSE - IF.. ELSE IF.. ELSE
$x = 30;
if ($x < 20) {
   echo "benar";
} else if ($x == 30) {
   echo "yay!";
} else {
   echo "salah";
}

?>

<!-- CONTOH PENGGUNAAN IF ELSE -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Percabangan</title>
   <style>
      .warna-baris {
         background-color: blue;
         color: white;
      }
   </style>
</head>
   <body>
      
      <table border="1" cellpadding="10" cellspacing="0">

      <?php for ($i = 1; $i <= 8; $i++) : ?>

         <?php if ($i % 2 == 0) : ?>

            <tr class="warna-baris">

         <?php else : ?>

            <tr>
               
         <?php endif; ?>

            <?php for ($j = 1; $j <= 5; $j++) : ?>
               <td>
                  <?= "$i, $j" ?>
               </td>
            <?php endfor; ?>

         </tr>

      <?php endfor; ?>

      </table>

   </body>
</html>


