<?php

// STRINGABLE INTERFACE
/**
 * di php 8, sekarang diperkenalkan interface baru bernama stringable
 * jika kita melakukan override magic function __toString(), maka secara otomatis class kita akan implement interface stringable
 * kita tidak perlu melakukannya secara manual, ini sudah dilakukan secara otomatis oleh php 8
 * https://wiki.php.net/rfc/stringable
 */

 // kode function argument stringable
 function sayHello(Stringable $stringable){
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
 }

 class Person{
    public function __toString() // override magic function
    {
        return "Person";
    }
 }

 sayHello(new Person());