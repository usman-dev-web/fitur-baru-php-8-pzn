<?php

// STRING TO NUMBER COMPARISON
/**
 * salah satu yang membingunkan di php adalah ketika kita melakukan perbandingan number dan string
 * misal saat kita bandingkan 0 == "usman", maka hasilnya true
 * kenapa true, karena php akan melakukan type jugling dan mengubah "usman" menjadi 0, sehingga hasilnya true
 * di php 8, khusus perbandingan string ke number diubah, agar tidak lagi membingungkan
 * https://wiki.php.net/rfc/string_to_number_comparison
 */

 var_dump(0 == "0"); // berfore php 7 is true, after php 8 is true
 var_dump(0 == "0.0"); // berfore php 7 is true, after php 8 is true
 var_dump(0 == "foo"); // berfore php 7 is true, after php 8 is false
 var_dump(0 == ""); // berfore php 7 is true, after php 8 is false
 var_dump(42 == "    42"); // berfore php 7 is true, after php 8 is true
 var_dump(42 == "42foo"); // berfore php 7 is true, after php 8 is false