<?php

// ATTRIBUTES
/**
 * attributes adalah menambahkan metadata terhadap kode program yang kita buat
 * fitur ini adalah fitur yang sangat baru di php, fitur ini bernama annotation di bahasa pemrograman java atau decorator di pyton dan javasrcipt
 * https://www.php.net/manual/en/language.attributes.php
 * https://wiki.php.net/rfc/attributes_v2
 */

// MENGGUNAKAN ATTRIBUTES
/**
 * attribute bisa kita gunakan di berbagai tempat, seperti class, function, method, property, class constant dan parameter
 * untuk menggunakan attribute, kita cukup gunakan tanda #[NamaAttribute] di target yang kita tentukan
 */

// ATTRIBUTE TARGET
/**
 * secara default, attribute bisa digunakan disemua target(class, function, method, property dan lain-lain)
 * jika kita ingin membatasi hanya bisa digunakan di target tertentu, kita bisa tambahkan informasinya ketika membuat class attribute
 */

// ATTRIBUTE CLASS
/**
 * attribute class adalah class biasa, kita bisa menambahkan property, function, method dan constructor jika kita mau
 * ini cocok ketika kita butuh menambahkan informasi tambahan di attribute class
 */

// kode membuat attributes class
#[Attribute(Attribute::TARGET_PROPERTY)] // menambahkan attribut dengan target penggunaanya di property
class NotBlank
{
}

// kode attribute class
#[Attribute(Attribute::TARGET_PROPERTY)] // attribute dengan target penggunaan di property
class Length
{
    public int $min;
    public int $max;

    // function construct
    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

// menggunakan attribute di property
class LoginRequest
{
    #[NotBlank] // menambahkan attribute di property dengan menyebutkan nama attributenya
    #[Length(min: 4, max: 8)] // menambahkan attribut di properti dengan lenght min 4 dan max 8
    public ?string $username; // ketika di inisialisai $username minimal harus 4 karakter, max 8 karakter

    #[NotBlank] // menambahkan attribute di property dengan menyebutkan nama attributenya
    #[Length(min: 8, max: 10)] // menambahkan attribut di properti dengan lenght min 4 dan max 8
    public ?string $password; // ketika di inisialisasi $password minimal harus 8 karakter, max 10 karakter
}

// kode function validateNotBlank untuk validasi attribute NotBlank
function validateNotBlank(ReflectionProperty $property, object $object): void
{
    // kode membaca attribute via reflection 
    $atttributes = $property->getAttributes(NotBlank::class); // mengambil semua attributes di class
    if (count($atttributes) > 0) { // jika attributes lebih dari 0, maka terdapat attributes
        if (!$property->isInitialized($object)){ // jika property di object belum diinisialisasi
            throw new Exception("Property $property->name is not initialization"); // throw exception
        }
        if ($property->getValue($object) == null){  // jika property sudah diinisialisasi tetapi belum di isi
            throw new Exception("Property $property->name is null"); // throw exception lagi
        }
    }
}

// function validasi untuk attribute Length
function validateLength(ReflectionProperty $property, object $object): void
{
    // cek apakah property di inisialisasi dan valuenya tidak null
    if (!$property->isInitialized($object) || $property->getValue($object) == null) {
        return; // cancel validation
    }

    // ketika $property ada valuenya
    $value = $property->getValue($object); // mendapatkan value dari property object
    $atttributes = $property->getAttributes(Length::class); // mendapatkan attribute
    foreach ($atttributes as $attribute) {
        $length = $attribute->newInstance(); // membuat object attribute sesuai deklarasi attribute yang di class LoginRequest 
        $valueLength = strlen($value); // mendapatkan value length dari property object
        if ($valueLength < $length->min){
            throw new Exception("Property $property->name is to short");
        }
        if ($valueLength > $length->max){
            throw new Exception("Property $property->name is to long");
        }
    }
}

// kode membaca attribute via reflection 
function validate(object $object)
{
    $class = new ReflectionClass($object); // membuat object secara general atau otomatis
    $properties = $class->getProperties(); // mendapatkan properties dari setiap object yang di instansiasi
    foreach ($properties as $property) {
        validateNotBlank($property, $object); // memanggil method yang bisa menyebabkan exception
        validateLength($property, $object); // memanggil method yang bisa menyebabkan exception
    }
}

$login = new LoginRequest();
$login->username = "usman";
$login->password = "12345678";
validate($login);
