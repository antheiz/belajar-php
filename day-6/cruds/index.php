<?php 
// import function
require 'function.php';

$fruids = query("SELECT * FROM fruids ORDER BY id DESC");

// kalo tombol cari di klik

if ( isset($_POST["cari"]) ) {
    $fruids = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP MySQL</title>
</head>
<body>
    <h1><a href="index.php" style="color:#000;text-decoration: none;">List Fruids</a></h1>

    <a href="create.php">+ Add new Fruids</a>

    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="15" autofocus placeholder="ketik yang ingin dicari" autocomplete="off"> 

        <button type="submit" name="cari">Cari</button>

    </form>

    <br>
    

    <table border="1", cellpadding="10", cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Fruid Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>

        <!-- Untuk mencetak pada row td jika data pada array/table kosong -->
        <?php if (empty($fruids)) : ?>
            <tr>
                <td colspan="5" style="text-align:center;">
                    <i>Data empty</i>
                </td>
            </tr>

        <?php else: ?>

            <?php $i = 1; ?>
            <?php foreach ( $fruids as $fruid ) : ?>

                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="update.php?id=<?= $fruid["id"]; ?>">Ubah</a>
                        |
                        <a href="delete.php?id=<?= $fruid["id"]; ?>" onclick=" return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                    </td>
                    <td><?= $fruid["fruid_name"]; ?></td>
                    <td>Rp. <?= $fruid["price"]; ?></td>
                    <td><?= $fruid["qty"]; ?></td>
                </tr>  

                <?php $i++ ?>
            <?php endforeach; ?>

        <?php endif; ?>

    </table>
</body>
</html>