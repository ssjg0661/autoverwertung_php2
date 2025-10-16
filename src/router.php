<?php

// $request_uri = $_SERVER['REQUEST_URI'];
// require_once __DIR__ . '/../config/common.php';

// $path = str_replace($base_path, '', parse_url($request_uri, PHP_URL_PATH));

// if (strpos($path, '/public') === 0) {
//     $path = substr($path, strlen('/public'));
// }

// global $currentPage;

// switch ($path) {
//     case '/':
//     case '/index.php':
//         $currentPage = 'autoverwertung';
//         require __DIR__ . '/../pages/home.php';
//         break;
//     case '/motorschaden-ankauf':
//         $currentPage = 'motorschaden';
//         require __DIR__ . '/../pages/motorschaden-ankauf.php';
//         break;
//     case '/unfallwagen-ankauf':
//         $currentPage = 'unfallwagen';
//         require __DIR__ . '/../pages/unfallwagen-ankauf.php';
//         break;
//     default:
//         http_response_code(404);
//         require __DIR__ . '/../pages/404.php';
//         break;
// }

$request_uri = $_SERVER['REQUEST_URI'];
require_once __DIR__ . '/../config/common.php'; // where $base_url is defined

// Parse the path without query string
$path = parse_url($request_uri, PHP_URL_PATH);

// Remove the base_url from the path if present
if (!empty($base_path) && strpos($path, $base_path) === 0) {
    $path = substr($path, strlen($base_path));
}

// Normalize trailing slashes (except root "/")
if ($path !== '/' && substr($path, -1) === '/') {
    $path = rtrim($path, '/');
}

global $currentPage;

switch ($path) {
    case '':
    case '/':
    case '/index.php':
        $currentPage = 'autoverwertung';
        require __DIR__ . '/../pages/home.php';
        break;

    case '/motorschaden-ankauf':
        $currentPage = 'motorschaden';
        require __DIR__ . '/../pages/motorschaden-ankauf.php';
        break;

    case '/unfallwagen-ankauf':
        $currentPage = 'unfallwagen';
        require __DIR__ . '/../pages/unfallwagen-ankauf.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/../pages/404.php';
        break;
}



?>