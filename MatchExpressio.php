<?php

// MATCH EXPRESSION
/**
 *  php 8 menambahkan kontrol baru bernama match expression
 *  match expression adalah struktur kontrol yang mirip dengan switch case, namun lebih baik
 *  match adalah expression, artinya dia bisa mengembalikan value
 *  https://wiki.php.net/rfc/match_expression_v2
 *  https://www.php.net/manual/en/control-sturctures.match.php
 * */

 // kode switch statement
 $value = "D";
 $result = "";
switch($value){
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda tidak Lulus";
        break;
    default:
    $result = "Anda salah jurusan";
}

echo $result . PHP_EOL;

// kode match expression(lebih simple dibanding dengan switch statement)
$result = match($value){
    "A","B","C" => "Anda lulus",
    "D" => "anda tidak lulus",
    default => "anda salah jurusan"
};

echo $result . PHP_EOL;

// NON EQUALS CHECK DI MATCH EXPRESSION
/**
 * selain equals check, berbeda dengan switch case, di match expression kita bisa lakukan pengecekan kondisi lainnya
 * misal pengecekan menggunakan kondisi perbandingan, bahkan pengecekan kondisi berdasarkan boolean
 * expresion yang dihasilkan dari sebuah function
 */

 // kode match expression non equals
 $value  = 80;
 $hasil = match(true){
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
 };

 echo $hasil . PHP_EOL;

 // kode match expression dengan kondisi
 $name = "Mr. Usman";
 $result = match(true){
    str_contains($name, 'Mr.') => "Hello pak",
    str_contains($name, 'Mrs.') => "Hello mba",
    default => "Hello"
 };
 
 echo $result . PHP_EOL;