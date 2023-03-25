<?php

// function dengan type data ReflectionProperty dan object
function validateBlank(ReflectionProperty $property, object $object){
    $attributes = $property->getAttributes(NotBlank::class); // mendapatkan attribute dari property
    if(count($attributes) == true){ // jika terdapat property
        if(!$property->isInitialized($object)){ // jika property belum di inisialisasi
            throw new Exception("Property $property->name is not initialized"); // tampilkan pesan error
        }
        if($property->getValue($object) == null){ // jika value property nya null
            throw new Exception("Property $property->name is not value"); // tampilkan pesan error
        }
    } 
}