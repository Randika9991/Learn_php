<?php

//$uri = $_SERVER['REQUEST_URI'];

//if ($uri === '/' || $uri === '/controllers/index') {
//    require 'controllers/index.php';
//} elseif ($uri === '/About') {
//    require 'controllers/About.php';
//} elseif ($uri === '/Contact') {
//    require 'controllers/Contact.php';
//}
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Only get the path without query string


$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/About.php',
    '/contact' => 'controllers/Contact.php',
    '/book' => 'controllers/book.php',
    '/notes' => 'controllers/Note.php',
];



if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
}