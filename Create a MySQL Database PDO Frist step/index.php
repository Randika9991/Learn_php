<?php

require "Functions.php";

$uri = $_SERVER['REQUEST_URI'];

//dd($_SERVER);
//dd(parse_url($uri));

//if ($uri === '/' || $uri === '/controllers/index') {
//    require 'controllers/index.php';
//} elseif ($uri === '/About') {
//    require 'controllers/About.php';
//} elseif ($uri === '/Contact') {
//    require 'controllers/Contact.php';
//}

//$routes = [
//    '/' => 'controllers/index.php',
//    '/About' => 'controllers/About.php',
//    '/Contact' => 'controllers/Contact.php',
//];
//
//if (array_key_exists($uri, $routes)) {
//    require $routes[$uri];
//} else {
//    http_response_code(404);
//}

$dsn = "mysql:host=localhost;port=3306;dbname=spicy_flavour;charset=utf8";
$username = 'root';
$password = '1234'; // password

$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->prepare("SELECT * FROM customer");    //table
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post)
{
    echo "<li>" . $post['custName'] . "</li>";
    echo "<li>" . $post['custId'] . "</li>";
}

