<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//db config
$config = require('config.php');
$db = new Database($config['database']);

//name
$heading = 'book';

//get custId id
$id = isset($_GET['id']) ? $_GET['id'] : null;

//dd($_GET);

$currentUserId = 1;

//db have or not cust value
$books = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $id])->findOrFail();

authorize($books['id'] !== $currentUserId);


require "views/book.view.php";
