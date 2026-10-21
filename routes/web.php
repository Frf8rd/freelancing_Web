<?php

require_once __DIR__ . "/../config/app.php";

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}


$routes = [
    'home'     => 'mainPage/views/main.php',
    'login'    => 'auth/views/login.php',
    'register' => 'auth/views/register.php',
    'servicii' => 'pages/views/servicii.php',
    'articol'  => 'pages/views/articol.php',
    'contact'  => 'pages/views/contact.php',
    'admin'    => 'pages/views/admin.php',
    'cont'     => 'pages/views/cont.php',
];

$page = $_GET['page'] ?? 'home';

if ($page === 'logout') {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
}

if (in_array($page, ['login', 'register'], true) && isset($_SESSION['rol'])) {
    $paginaCont = $_SESSION['rol'] === 'admin' ? 'admin' : 'cont';
    header('Location: index.php?page=' . $paginaCont);
    exit;
}

if ($page === 'admin' && ($_SESSION['rol'] ?? '') !== 'admin') {
    http_response_code(403);
    $page = 'forbidden';
    $routes['forbidden'] = 'pages/views/forbidden.php';
}

if ($page === 'cont' && !isset($_SESSION['rol'])) {
    http_response_code(403);
    $page = 'forbidden';
    $routes['forbidden'] = 'pages/views/forbidden.php';
}

if (isset($routes[$page])) {
    require __DIR__ . "/../app/" . $routes[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/../app/pages/views/404.php";
}
