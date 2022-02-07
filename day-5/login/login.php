<!-- PHP Login Example using Request Method -->

<?php

// cek apakah tombol submit di tekan atau belum
if ( isset($_POST["submit"]) ) {

    // cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {

        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <!-- Tampilkan pesan error, jika username atau password salah -->
    <?php if ( isset($error) ) : ?>
        <i style="color:red;">username / password salah</i>
    <?php endif; ?>
    
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>

</body>
</html>