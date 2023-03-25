<?php

// Named Argument
/**
 * biasanya saat kita memanggil function, maka kita harus memasukan argument atau parameter sesuai dengan posisinya
 * dengan kemampuan named argument, kita bisa memasukan argument atau parameter tanpa harus mengikuti posisinya
 * namun penggunaan named argument harus disebutkan nama argument arau parameternya
 * named argument juga menjadikan kode program mudah dibaca ketika memanggil function yang memiliki argument yang sangat banyak
 * https://wiki.php.net/rfc/named_params
 */

 // kode named argument
 function sayHello(string $first, string $middle, string $last){
    echo "Hello $first $middle $last" . PHP_EOL;
 }

 // tanpa named argument
//  sayHello("M", "Usman", "Maulana");

 // dengan named argument
 sayHello(last: "Maulana", middle: "Usman", first: "M");