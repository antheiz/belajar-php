<?php

// INTEGER

echo "Desimal : ";
var_dump(1234);

echo "Oktal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b1111111);

echo "Underscore di Number : ";
var_dump(10_000_000_00);


// Floating Point

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E Notation Minus (7 x 0.00.1) : ";
var_dump(7e-3);

echo "Underscore di Floating point : ";
var_dump(1_234.567);


// Integer Overflow

echo "Integer Overflow 64 Bit : ";
var_dump(9223372036854775807); // jika lebih maka otomatis di convert ke floating point