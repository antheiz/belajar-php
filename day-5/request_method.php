<!-- 2. Request method GET/POST : 

    - Variable scope
    - Superglobals

 -->


 <!-- Variable Scope / Lingkup Variable -->
<?php 

// $x = 10;

// function cetakX() {
//     global $x;
//     // $x = 20;
//     echo $x;
// }

// cetakX();
// echo "<br>";
// echo $x;

?>


<!-- Supergolbal -->
<!-- 

    - Variable global milik PHP (yang sudah disediakan PHP)
    - Bertype Array Associative
    
    - Method request GET dan Superglobal Variable $_GET adalah dua hal yang berbeda

 -->
<?php

// $_GET

// CARA MENAMBAHKAN KE ARRAY ASSOCIATIVE, TAPI UNTUK $_GET PUNYA CARA LAIN, YAITU PAKAI QUERY STRING
// $_GET["name"] = "Theis Andatu";
// $_GET["umur"] = 20;

// print_r($_GET)


?>

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
    <title>Request - $_GET</title>
</head>
<body>
    
    <ul>
        <?php foreach ($fruids as $fruid) : ?>
            <li>
                <a href="request_method2.php?price=<?= $fruid["price"] ?>&name=<?= $fruid["name"]?>&qty=<?= $fruid["qty"]?>">
                    <?= $fruid["name"] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>
</html>