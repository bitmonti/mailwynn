<?php
$cors = require __DIR__ . '/config/crossOrigin.php';

header("Access-Control-Allow-Origin: " . $cors['allow']);
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

setlocale(LC_TIME, 'de_DE');

require __DIR__ . '/autoload.php';
require __DIR__ . '/config/rootDirectory.php';

$container = new App\Core\Container();

// OUTPUT SECURE
function e($str)
{
    $str = trim($str);
    $str = htmlspecialchars_decode($str);
    return htmlentities($str, ENT_QUOTES, 'UTF-8');
}
