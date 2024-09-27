<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

//if ($note) {
//    echo "work";
//}

//try {
//    authorize($_GET['id'] === $currentUserId);
//} catch (Exception $e) {
//    echo "error";
//}

try {
    view("notes/show.view.php", [
        'heading' => 'Note',
        'note' => $note
    ]);
} catch (Exception $e) {
    echo "error";
}