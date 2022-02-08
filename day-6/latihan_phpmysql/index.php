<?php
// import file function
require 'function.php';

// query untuk ambil data
$fruids = query("SELECT * FROM fruids");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP MySQL</title>
</head>
<body>
    <h1>List Fruids</h1>

    <table border="1", cellpadding="10", cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Fruid Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ( $fruids as $fruid ) : ?>


            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a>
                    |
                    <a href="">Hapus</a>
                </td>
                <td><?= $fruid['name'] ?></td>
                <td>Rp. <?= $fruid['price'] ?></td>
                <td><?= $fruid['qty'] ?></td>
            </tr>

            <?php $i++ ?>

        <?php endforeach; ?>
        
    </table>
</body>
</html>