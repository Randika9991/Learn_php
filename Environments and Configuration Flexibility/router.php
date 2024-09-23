<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/' || $uri === '/controllers/index') {
    require 'controllers/index.php';
} elseif ($uri === '/About') {
    require 'controllers/About.php';
} elseif ($uri === '/Contact') {
    require 'controllers/Contact.php';
}

$routes = [
    '/' => 'controllers/index.php',
    '/About' => 'controllers/About.php',
    '/Contact' => 'controllers/Contact.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
}