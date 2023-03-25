<?php

// function dengan type data ReflectionProperty dan object
function validateLength(ReflectionProperty $property, object $object){
    // jika property belum di inisialisasi dan property string kosong, cancel validation
    if(!$property->isInitialized($object) || $property->getValue($object) == null){
        return; // cancel validation
    }

    $value = $property->getValue($object); // mendapatkan value dari property object
    $attributes = $property->getAttributes(Length::class); // mendapatkan attribute dari object
    foreach($attributes as $attribute){
        $length = $attribute->newInstance(); // instansiasi attribute object 
        $valueLength = strlen($value); // mendapatkan panjang value dari property yang sudah di instansiasi
        if($valueLength < $length->min){ // jika panjang $valueLength kurang dari $length->min
            throw new Exception("Property $property->name is to short"); // tampikan pesar error
        }
        if($valueLength > $length->max){ // jika panjang $valueLength lebih dari $length->max
            throw new Exception("Property $property->name is to long"); // tampilkan pesan error
        }
    }
}