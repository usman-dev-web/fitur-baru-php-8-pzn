<?php

// CONSISTENT TYPE ERROR
/**
 * saat kita membuat function dan ketika kita mengirim argument dengan tipe data yang salah, maka akan berakibat terjadi error
 * sayangnya di php banyak function bawaan yang tidak mengembalikan type error, malah memberi warning
 * agar konsisten, sekarang di php 8, banyak function bawaan yang akan error jika kita salah mengirim tipe data
 * https://wiki.php.net/rfc/consistent_type_erros
 */

 // kode consistent type error
//  strlen([]); // akan terjadi error