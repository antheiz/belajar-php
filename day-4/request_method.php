<!-- 2. Request method GET/POST : 

    - Variable scope
    - Superglobals

 -->


 <!-- Variable Scope / Lingkup Variable -->
<?php 

$x = 10;

function cetakX() {
    global $x;
    // $x = 20;
    echo $x;
}

cetakX();
echo "<br>";
echo $x;

?>