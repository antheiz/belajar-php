<!-- 1. Array Associative / Tempat menyimpan banyak nilai or Array Multi Dimensi
        yang key-nya dibikin sendiri / hampir sama seperti Dictionary di Python


 -->


 <?php 
 
 $fruids = [
    [
        //key   :  //value 
         "name" => "Durian",
         "qty" => "1kg",
         "price" => "50.000",
    ],
    [
        "name" => "Mangga",
        "price" => "70.000",
        "qty" => "3kg",
    ],
    [
        "price" => "20.000",
        "name" => "Jeruk",
        "qty" => "2kg",
    ]
 ]

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>

        <h1>Daftar Buah-buahan</h1>

        <?php foreach ($fruids as $fruid) : ?>
            <ul>
                <li>Nama Buah: <?= $fruid["name"]; ?></li>
                <li>Kuantitas: <?= $fruid["qty"]; ?></li>
                <li>Harga: <?= $fruid["price"]; ?></li>
            </ul>
        <?php endforeach; ?>
    
</body>
</html>