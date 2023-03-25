<?php

// THROW EXPRESSION
/**
 * throw adalah sebuah statement
 * hal ini menyebabkan kita kesulitan menggunakan throw di beberapa tempat yang membutuhkan expression seperti ternary operator misalnya
 * di php 8, sekarang throw adalah sebuah expression, artinya dia memiliki nilai dan sekarang kita
 * bisa menggunakan di tempat tempat yang memang membutuhkan expression seperti ternary operator
 * https://wiki.php.net/rfc/throw_expression
 */

 // kode throw expression
 $name = "usman";
 $result = $name == "usman" ? "Benar" : throw new Exception("Bukan usman"); // jika $name = "usman" tampilkan benar, jika  bukan throw expression ukan usman
 var_dump($result);

 // throw expression di function
 function validate(?string $name){
    $result = $name ?? throw new Exception("null");
    echo "Hello $result" . PHP_EOL;
 }

 echo validate("usman");