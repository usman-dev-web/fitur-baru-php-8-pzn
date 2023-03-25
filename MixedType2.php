<?php

// MIXED TYPE V2
/**
 * di php 7 terdapat type data mixed, tipe data ini digunakan ketika sebuah argument atau return function mengembalikan data yang bisa berbeda beda
 * karena tidak bisa menyebutkan tipe data berbeda-beda di php 7, maka biasanya ditambahkan tipe data baru bernama mixed
 * di php 8, tipe data mixed di perbaharui, karena di php 8 sudah ada union types, jadi sekarang tipe data mixed adalah singkatan dari tipe data
 * array|bool|callable|int|float|object|resource|string
 * https://wiki.php.net/rfc/mixed_type_v2
 */

 // kode mixed type
 function testMixed(mixed $param) : mixed{
    if(is_array($param)){
        return [];
    }else if(is_string($param)){
        return "string";
    }else if(is_bool($param)){
        return false;
    }else if(is_numeric($param)){
        return 1;
    }else{
        return null;
    }
 }