<?php
// Koneksi ke Database

$host = "172.17.0.2";
$user = "root";
$password = "salupa";
$database = "phpdasar";

// buat koneksi
$conn = mysqli_connect($host, $user, $password, $database);


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


?>