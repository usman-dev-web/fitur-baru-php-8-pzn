<?php

// NULLSAFE OPERATOR
/**
 * php sekarang memiliki nullsafe operator seperti di bahasa pemrograman kotlin atau typescript
 * biasanya ketika kita ingin mengakses sesuatu dari sebuah object yang bisa memungkinkan nilai null
 * maka kita akan melakukan pengecekan apakah object tersebut null atau tidak, jika tidak baru kita akses object tersebut
 * dengan nullsafe operator, kita tidak perlu melakukan itu, kita hanya perlu menggunakan karakter ? (tanda tanya)
 * secara otomatis php akan melakukan pengecekan null tersebut
 * https://wiki.php.net/rfc/nullsafe_operator
 */

// kode nullable class
class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address; // property dengan type object
}

// kode manual null check
function getCountry(?User $user): ?string // function dengan type parameter object User
{
    if ($user != null) {
        if ($user->address != null) {
            return $user->address->country;
        }
    }

    return null;
}

echo getCountry(null);

// kode dengan nullsafe operator
function getData(?User $user): ?string{
    return $user?->address?->country;
}
echo getData(null);