<!-- POST Example -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST</title>
</head>
<body>
    <?php if ( isset($_POST["submit"]) ) : ?>
        <h1>Halo bro, <?= $_POST["name"] ?> </h1>
    <?php endif; ?>

    <form action="" method="POST">
        Masukan nama :
        <input type="text" name="name">
        <br><br>
        <button type="submit" name="submit">Kirim</button>
    </form>


</body>
</html>