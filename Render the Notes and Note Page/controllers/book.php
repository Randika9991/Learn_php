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

if ($custId) {
    try {
        $books = $db->query('SELECT * FROM customer WHERE custId = custId', ['custId' => $custId])->fetch(PDO::FETCH_ASSOC);

        if (!$books) {
            echo "No customer found with ID: " . htmlspecialchars($custId);
            exit;
        }

    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        exit;
    }
} else {
    echo "Customer ID is not provided.";
    exit;
}

require "views/book.view.php";
