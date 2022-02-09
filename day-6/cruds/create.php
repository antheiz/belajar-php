<?php 

require 'function.php';

// inisiasi database
$host = "172.17.0.2";
$database = "phpdasar";
$user = "root";
$password = "salupa";

// buat koneksi database
$db = mysqli_connect($host, $user, $password, $database);

// cek apakah tombol submit sudah ditekan ato blum
if ( isset($_POST["submit"]) ) {

    // CARA MENGGUNAKAN MODULA/FUNCTION FILE TERPISAH
    if ( addFruids($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal menambahkan data ');
            </script>
        ";
    }

    // CARA JIKA TIDAK DIPISAH DI BEDA FILE

    // $name = $data["name"];
    // $price = $data["price"];
    // $qty = $data["qty"];
    
    // $query = "INSERT INTO fruids VALUES (NULL, '$name', '$price', '$qty')";
    // mysqli_query($db, $query);

    // cek apakah data berhasil ditambah ato trada
    // if ( mysqli_affected_rows($db) > 0 ) {
    //     echo "Data berhasil di tambah!";
    // } else {
    //     echo "Gagal, error ditemukan sebagai berikut: ";
    //     echo "<br>";
    //     echo mysqli_error($db);
    // }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST Fruids</title>
</head>
<body>

    <h1>Add new Fruids</h1>

    <a href="index.php">Kembali</a>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </li>
            <li>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" required>
            </li>
            <li>
                <label for="qty">Quantity</label>
                <input type="text" name="qty" id="qty" required>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Add Data!</button>
            </li>
        </ul>
    </form>

</body>
</html>