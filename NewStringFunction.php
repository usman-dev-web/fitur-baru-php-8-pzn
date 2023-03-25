<?php

// NEW STRING FUNCTION
/**
 * di php 8, terdapat beberapa function untuk memanipulasi string
 * https://wiki.php.net/rfc/str_contains
 * https://wiki.php.net/rfc/add_str_starts_with_and_ends_with_functions
 */

 // STRING FUNCTION
 /**
  * str_contains($string, $contains):bool KETERANGAN mengecek apakah $string mengandung $contains
  * str_stars_with($string, $value):bool KETERANGAN mengecek apakah $string memiliki awal $value
  * str_ends_with($string, $value):bool KETERANGAN mengecek apakah $string memiliki akhiran $value
  */

  // kode new string function
  var_dump(str_contains("M Usman Maulana", "Usman")); // true
  var_dump(str_contains("M Usman Maulana", "Adit")); // false
  var_dump(str_starts_with("M Usman Maulana", "M")); // true
  var_dump(str_starts_with("M Usman Maulana", "Usman")); // false
  var_dump(str_ends_with("M Usman Maulana", "Maulana")); // true
  var_dump(str_ends_with("M Usman Maulana", "Usman")); // false
