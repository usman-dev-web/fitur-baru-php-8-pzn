<?php

/** 
 * kadang kita sering sekali membuat property sekaligus mengisi property tersebut menggunakan constructor
 * sekarang kita bisa otomatis langsung membuat property dengan via constructor
 * fitur ini mirip sekali di bahasa pemrograman seperti kotlin dan typescript
 * https://wiki.php.net/rfc/constructor_promotion
 */

// kode property dan constructor
class Product
{

    // membuat constructor dengan property promotion
    // langsung mengisi argument sekaligus promotion sebagai property pada class
    public function __construct(
        public string $name,
        public string $email,
        public string $address
    ) {
    }
}

// mengisi argument dengan named argument
$product = new Product(name: "Usman", email: "usman@id", address: "Pandeglang");
echo "Name : {$product->name}" . PHP_EOL;
echo "Email : {$product->email}" . PHP_EOL;
echo "Address : {$product->address}" . PHP_EOL;