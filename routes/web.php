<?php

require_once __DIR__ . "/../config/app.php";


$routes = [
    'home'     => 'mainPage/views/main.php',
    'login'    => 'auth/views/login.php',
    'servicii' => 'pages/views/servicii.php',
    'contact'  => 'pages/views/contact.php',
];

$page = $_GET['page'] ?? 'home';

if (isset($routes[$page])) {
    require __DIR__ . "/../app/" . $routes[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/../app/pages/views/404.php";
}