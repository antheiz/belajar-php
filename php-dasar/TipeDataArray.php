<?php

$myArray = array(12, 6, 8, 9.1);

var_dump($myArray);

$ourArray = ["Paskahlia", "Mince", "Rumbiak"];

var_dump($ourArray);
var_dump($ourArray[0]);

$ourArray[0] = "Paskah";
var_dump($ourArray);

unset($ourArray[1]);
var_dump($ourArray);

$ourArray[] = "Bay";
var_dump($ourArray);

var_dump(count($ourArray));



// Array Associative

$weArray = array(
    "fName" => "Theis",
    "mName" => "Andatu",
    "lName" => "Abisay",
);

var_dump($weArray);

var_dump($weArray["fName"]);

$theArray = [
    "nrp" => "05211940007003",
    "nama" => "Dortheis Andatu",
    "departement" => "Information System",
    "address" => [
        "province" => "Papua",
        "city" => "Jayapura"
    ]
];

var_dump($theArray);

var_dump($theArray["nama"]);
var_dump($theArray["address"]["city"]);