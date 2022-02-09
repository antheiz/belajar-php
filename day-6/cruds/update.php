<?php 

require 'function.php';

// ambil data di URL
$id = $_GET["id"];


// query data mahasiswa berdasarkan id

$fruids = query("SELECT * FROM fruids WHERE id = $id ")[0];


// cek apakah tombol submit sudah ditekan ato blum
if ( isset($_POST["submit"]) ) {

    // CARA MENGGUNAKAN MODULA/FUNCTION FILE TERPISAH
    if ( updateFruids($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        // echo "
        //     <script>
        //         alert('Gagal mengubah data ');
        //     </script>
        // ";
        echo "gagal";
        echo "<br>";
        echo mysqli_error($db);
    }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UPDATE Fruids</title>
</head>
<body>

    <h1>Change data Fruids</h1>

    <a href="index.php">Kembali</a>

    <form action="" method="POST">
        <ul>
            <input type="number", name="id" value="<?= $fruids['id'] ?>" hidden>
            <li>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?= $fruids['fruid_name'] ?>" required>
            </li>
            <li>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" value="<?= $fruids['price'] ?>" required>
            </li>
            <li>
                <label for="qty">Quantity</label>
                <input type="text" name="qty" id="qty" value="<?= $fruids['qty'] ?>" required>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Update Data!</button>
            </li>
        </ul>
    </form>

</body>
</html>