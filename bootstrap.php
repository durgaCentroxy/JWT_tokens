<?php

namespace Symfony\Component\Dotenv;
require 'vendor/autoload.php';
// require 'vendor/dotenv/Dotenv.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

// PHP has no base64UrlEncode function, so let's define one that
// does some magic by replacing + with -, / with _ and = with ''.
// This way we can pass the string within URLs without
// any URL encoding.
function base64UrlEncode($text)
{
    return str_replace(
        ['+', '/', '='],
        ['-', '_', ''],
        base64_encode($text)
    );
}
?>