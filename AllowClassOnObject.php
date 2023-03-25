<?php

// ALLOW CLASS ON OBJECT
/**
 * di php 7, untuk mendapatkan nama class sebuah object, kita perlu menggunakan NamaClass::class atau get_class($object)
 * di php 8, sekarang kita bisa langsung mengambil nama class dari $object::class secara langsung 
 * http://wiki.php.net/rfc/class_name_literal_on_object
 */

 class Login{

 }

 $login = new Login();

 // mengambil nama class
 var_dump($login::class); // php 8
 var_dump(get_class($login)); // php 7
 var_dump(Login::class); // yang lama