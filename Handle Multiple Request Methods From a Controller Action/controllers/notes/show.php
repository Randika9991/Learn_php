<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);



$currentUserId = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    if ($note) {
        $done =  $db->query('delete from notes where id = :id', [
            'id' => $_GET['id']
        ]);
        if ($done) {
            header('location: /notes');
            exit();
        }
    }
}else{
    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    try {
        view("notes/show.view.php", [
            'heading' => 'Note',
            'note' => $note
        ]);
    } catch (Exception $e) {
        echo "error";
    }
}

