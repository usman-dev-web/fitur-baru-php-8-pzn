<?php

// VALIDASI ABSTRACK FUNCTION DI TRAIT
/**
 * di php 8, sekarang terdapat validasi ketika mengimplementasikan abstrack function di class dari trait
 * di php 7, saat kita mengubah seperti parameter dan return nya, hal itu tidak menjadi masalah
 * namun di php 8, jika kita mengubah implementasinya dari abstrack functionya, maka otomatis akan error
 * https://wiki.php.net/rfc/abstract_trait_method_validation
 */

// kode validation di abstrack function trait
trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleTraitImpl
{

    // use SampleTrait;

    // // override function dengan type data parameter yang berbeda. ini akan menjadikan error
    // public function sampleFunction(int $name): string 
    // {
    //     return "error";
    // }
}

//  VALIDATION DI FUNCTION OVERRIDING
/**
 * sebelumnya kita tahu bahwa melakukan override dengan mengubah signature function hanya akan menimbulkan warning
 * di php 8 hal tersebut akan menimbulkan error
 * sehingga kita tidak bisa lagi mengubah signature function yang kita override, seperti mengubah argument atau mengubah return value
 * https://wiki.php.net/rfc/Isp_errors
 */

// kode validation di function overriding
class ParentClass
{
    public function method(array $a)
    {
    }
}

class ChildClass extends ParentClass
{
    // // override function dengan type data parameter yang berbeda. ini akan menjadikan error
    // public function method(int $a)
    // {

    // }
}

// PRIVATE FUNCTION OVERRIDING
/**
 * di php 7, saat kita membuat function, tapi ternyata di parentnya terdapat function dengan nama yang sama, walaupun itu private hal itu dianggap overriding
 * padahal sudah jelas bahwa private function tidak bisa diakses oleh turunannya
 * di php 8, sekarang private function tidak lagi ada hubungannya dengan child classnya. sehingga kita bebas membuat
 * function dengan nama yang sama walaupun di parent ada function private dengan nama yang sama
 * https://wiki.php.net/rfc/inheritance_private_methods
 */

// kode private function overriding
class Manager
{
    private function test(): void
    {
    }
}

class VicePresident extends Manager
{
    // tidak akan error walaupun di class parent terdapat nama class yang sama karena di class parent access modifiernya private
    public function test(int $data): void
    {
    }
}
