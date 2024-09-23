<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//db config
$config = require('config.php');
$db = new Database($config['database']);

//name
$heading = 'book';

//get custId id
$custId = isset($_GET['custId']) ? $_GET['custId'] : null;

$currentUserId = 1;

//db have or not cust value
$books = $db->query('SELECT * FROM customer WHERE custId = :custId', ['custId' => $custId])->findOrFail();

authorize($books['custId'] !== $currentUserId);

//Authorization
//if (! $books) {
//    abort("Customer ID is not provided.");
//}
//if ($books['custId'] !== $currentUserId) {
//    abort(Response::FORBIDDEN);
//}
//function abort($message = "An error occurred") {
//    http_response_code(404); // or 403 based on the error
//    echo htmlspecialchars($message);
//    exit;
//}

//if ($custId) {
//    try {
//        if (! $books) {
//            abort();
//        }
//        if ($books['user_id'] !== $currentUserId) {
//            abort(Response::FORBIDDEN);
//        }
//
//        if (!$books) {
//            echo "No customer found with ID: " . htmlspecialchars($custId);
//            exit;
//        }
//
//    } catch (PDOException $e) {
//        echo "Database error: " . $e->getMessage();
//        exit;
//    }
//} else {
//    echo "Customer ID is not provided.";
//    exit;
//}

require "views/book.view.php";
