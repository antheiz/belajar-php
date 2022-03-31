<?php

echo 'Name : ';
echo "Theis Andatu ";
echo "\n";

echo "Nama : ";
echo "Theis\t Andatu\n";

// Heredoc
echo <<<NAMA
Nama saya adalah 
Theis Andatu. saya belajar Tipe 
data String

NAMA;

// Nowdoc
echo <<<'NAMA'
Nama saya adalah 
Theis Andatu. saya belajar Tipe 
data String

NAMA;