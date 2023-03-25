<?php

require_once __DIR__ . "/../Class/Content.php";
require_once __DIR__ . "/../Class/Length.php";
require_once __DIR__ . "/../Class/NotBlank.php";
require_once __DIR__ . "/../Exception/Validate.php";
require_once __DIR__ . "/../Utility/ValidateBlank.php";
require_once __DIR__ . "/../Utility/ValidateLength.php";

$content = new Content();
$content->username = "Usman";
$content->email = "uus@co.id";
$content->content = "haii nama saya usman";

try{
    validate($content);
    echo "Berhasil membuat Content" . PHP_EOL;
}catch(Exception $exception){
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}