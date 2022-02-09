<?php

// inisiasi database
$host = "172.17.0.2";
$database = "phpdasar";
$user = "root";
$password = "salupa";

// membuat koneksi
$db = mysqli_connect($host, $user, $password, $database);

// membuat function untuk get data
function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function addFruids($data) {
    global $db;

    $name = htmlspecialchars($data["name"]);
    $price = htmlspecialchars($data["price"]);
    $qty = htmlspecialchars($data["qty"]);
    
    $query = "INSERT INTO fruids VALUES (NULL, '$name', '$price', '$qty')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}


function deleteFruids($id) {
    global $db;

    mysqli_query($db, "DELETE FROM fruids WHERE id = $id");

    return mysqli_affected_rows($db);

}

function updateFruids($data) {
    global $db;

    $id = $data["id"];
    $name = htmlspecialchars($data["name"]);
    $price = htmlspecialchars($data["price"]);
    $qty = htmlspecialchars($data["qty"]);
    
    $query = "UPDATE fruids SET fruid_name = '$name', price = $price, qty = '$qty' WHERE id = $id ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

?>


