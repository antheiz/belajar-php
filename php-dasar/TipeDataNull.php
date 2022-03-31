<?php

$name = "Theis";
$name = null;

$age = null;


echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";


// Mengecek data Null atau tidak

// $name = "Theis";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";


// Menghapus variable

$contoh = "";
unset($contoh); // tidak direkomendasi
// echo $contoh; 


$contoh = "Theis";
$contoh = null;

var_dump(isset($contoh)); // direkomendasi
