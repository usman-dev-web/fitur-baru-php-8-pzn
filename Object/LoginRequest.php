<?php

require_once __DIR__ . "/../Class/Length.php";
require_once __DIR__ . "/../Class/LoginRequest.php";
require_once __DIR__ . "/../Class/NotBlank.php";
require_once __DIR__ . "/../Exception/Validate.php";
require_once __DIR__ . "/../Utility/ValidateBlank.php";
require_once __DIR__ . "/../Utility/ValidateLength.php";

$login = new LoginRequest();
$login->username = "usman";
$login->password = "usman123";

try{
    validate($login);
    echo "Sukses Login" . PHP_EOL;
}catch(Exception $exception){
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
    return; 
}