<?php
error_reporting(E_ERROR);

use Controllers\HomeController;

require_once 'vendor/autoload.php';

if (preg_match(
    '/\.(?:png|jpg|jpeg|gif|ico|js|css)$/',
    $_SERVER["REQUEST_URI"]
)) {
    return false;    // сервер возвращает файлы напрямую.
}

$url = $_SERVER["REQUEST_URI"];

$routes = [
    '/' => [
        'controller' => HomeController::class,
        'method' => 'index',
    ],
    '/create' => [
        'controller' => HomeController::class,
        'method' => 'createView',
    ],
    '/create/task' => [
        'controller' => HomeController::class,
        'method' => 'create',
    ],
    '/update' => [
        'controller' => HomeController::class,
        'method' => 'update',
    ],
];

$route = $routes[$url];

if (!$route) {
    http_response_code(404);
    return false;
}

$controller = new $route['controller']();
$response = $controller->{$route['method']}();

echo $response;
