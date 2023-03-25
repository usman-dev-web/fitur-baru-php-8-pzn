<?php

// kode function untuk memvalidasi object
function validate(object $object){
    $class = new ReflectionClass($object); // membuat instance class secara general(otomatis)
    $properties = $class->getProperties(); // mengambil property dari class
    foreach($properties as $property){
        validateBlank($property, $object); // memanggil method yang bisa menyebabkan exception
        validateLength($property, $object); // memanggil method yang bisa menyebabkan exception
    }
}