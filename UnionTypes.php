<?php

/**
 * php adalah bahasa pemrograman yang dynamic
 * kita tahu sebenarnya saat membuat variable, parameter, argument, return value, sebenarnya di php kita tidak wajib
 * menyebutkan tipe datanya, dan php bisa berubah ubah tipe data
 * saat kita tambahkan tipe data, maka secara otomatis php akan memastikan tipe data tersebut harus sesuai dengan tipe data yang sudah didefinisikan
 * di php 8, ada fitur union types, dimana kita bisa menambahkan lebih dari satu tipe data ke property, argument, parameter atau return value
 * pengunaan union type bisa menggunakan tanpa | diikuti dengan tipe data selanjutnya
 * https://wiki.php.net/rfc/union_types_v2
 */

 // kode union types di property
 class Example{
    public string | int | bool | array $data;
 }
 
 $emp = new Example();
 $emp->data = "Usman";
 var_dump($emp);
 $emp->data = 1;
 var_dump($emp);
 $emp->data = true;
 var_dump($emp);
 $emp->data = ["Usman"];
 var_dump($emp);


 // kode union types di argument
 function sample(string|array $data):void{
    if(is_string($data)){
        echo "ini string" . PHP_EOL;
    }else if(is_array($data)){
        echo "ini array" . PHP_EOL;
    }
 }

sample("usman");
sample(["usman"]);

// kode unios types di return value
function sampleFunction(string|array $data):string|array{
    if(is_string($data)){
        return "response string";
    }else if(is_array($data)){
        return ["response"];
    }
}

echo sampleFunction("usman") . PHP_EOL;
print_r(sampleFunction(["usman"]))  . PHP_EOL;