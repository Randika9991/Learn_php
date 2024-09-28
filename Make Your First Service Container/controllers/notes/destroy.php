<?php
use Core\Database;
use Core\App;

//dd($_SERVER);
$db = App::resolve(Database::class);
//
$currentUserId = 1;
//
$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

if ($note) {
    echo "yes";
}
//
//authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);
//
header('location: /notes');
exit();