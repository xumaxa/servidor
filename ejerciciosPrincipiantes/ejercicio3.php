<?php 
    //entero
    $n= 10;
    echo gettype($n). "<p>\n</p>";
    //octal
    $n = 010;
    echo gettype($n). "<p>\n</p>";
    //hexadecimal
    $n= 0x10;
    echo gettype($n). "<p>\n</p>";
    //float
    $n=20.4;
    echo gettype($n). "<p>\n</p>";
    //float con notacion flotante
    $n =20.4E1;
    echo gettype($n). "<p>\n</p>";
    //cadena
    $n = "hola";
    echo gettype($n). "<p>\n</p>";
    //booleano
    $n = true;
    echo gettype($n). "<p>\n</p>";
?>
