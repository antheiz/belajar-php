<?php
// Koneksi ke Database

// $host = "172.17.0.2";
// $user = "root";
// $password = "salupa";
// $database = "phpdasar";

// buat koneksi
$conn = mysqli_connect("172.17.0.2", "root", "salupa", "phpdasar");

// ambil data dari table
$result = mysqli_query($conn, "SELECT * FROM fruids");


// ambil data (fetch) "fruids/table" dari object result

// ada beberapa cara mengambil/get dari "fruids"
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associated
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // mengembalikan

// $mhs = mysqli_fetch_row($result);
// $mhs = mysqli_fetch_assoc($result);
// $mhs = mysqli_fetch_array($result);
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->name) // untuk tampilkan berdasarkan object


// while ($mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }

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
        <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="">Ubah</a>
                        |
                        <a href="">Hapus</a>
                    </td>
                    <td><?= $row['name'] ?></td>
                    <td>Rp. <?= $row['price'] ?></td>
                    <td><?= $row['qty'] ?></td>

                </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>