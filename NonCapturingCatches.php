<?php

// NON CAPTURING CATCHES
/**
 * saat terjadi error di php, biasanya kita akan menggunakan try catch
 * lalu dalam catch kita akan menangkap error dan menyimpannya dalam variable exception
 * walaupun sebenarnya tidak kita gunakan, kita tetap harus membuat variable exceptionnya
 * di php 8, sekarang kita tidak wajib membuat variable exceptionnya jika memang tidak akan menggunankannya
 * https://wiki.php.net/rfc/non-capturing_catches
 */

 // kode non capturing catches
 function validate(string $name)
 {
    if(trim($name) == ""){
        throw new Exception("invalid name");
    }
 }

 try{
    validate("usman");
    echo "sukses";
 }catch(Exception){ // tidak perlu membuat variable exception untuk menangkap pesan error kalau memang tidak butuh pesan errornya
    echo "Invalid Name";
 }
