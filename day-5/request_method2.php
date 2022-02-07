<?php 

// cek apakah tidak ada data di $_GET
// if ( !isset($_GET["price"]) || 
//      !isset($_GET["name"]) || 
//      !isset($_GET["qty"]) ) {
//     // redirect
//     header("Location: request_method.php");
//     exit;
// }

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail $_GET</title>
</head>
<body>

    <h1>List Fruids</h1>

    <ul>
        <li> Price:
            <?= $_GET["price"]?>
        </li>
        <li> Name:
            <?= $_GET["name"]?>
        </li>
        <li> Qty:
            <?= $_GET["qty"]?>
        </li>
    </ul>

    <a href="request_method.php">Kembali</a>
    
</body>
</html> -->


<!-- POST -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DETAIL POST</title>
</head>
<body>
    <h1>Selamat datang, <?= $_POST["name"] ?>!</h1>
</body>
</html>