<?php

// Define base path one level up from the current directory
//define("BASE_PATH", str_replace('\\', '/', __DIR__ . '/../'));  // Adjust the path
//
//// Debugging: Check if the base path is correct
//var_dump(BASE_PATH);  // Ensure this points to the correct directory

// Require files using the base path
//require BASE_PATH . "Functions.php";  // BASE_PATH applied here
//
//// Database and Response files should also use the BASE_PATH
//require BASE_PATH . 'Database.php';
//require BASE_PATH . 'Response.php';
//
//// Include router
//require BASE_PATH . 'router.php';

// Example database query logic (assuming $db is properly initialized)
// $posts = $db->query("SELECT * FROM customer")->fetchAll(PDO::FETCH_ASSOC);

// foreach ($posts as $post) {
//     echo "<li>" . $post['custName'] . "</li>";
//     echo "<li>" . $post['custId'] . "</li>";
// }


const BASE_PATH = __DIR__ . '/../'; //declare constant


require BASE_PATH . 'functions.php';


spl_autoload_register(function ($class) {
    require base_path("Core/".$class.'.php');
});

require base_path('router.php');