<?php

$config = require('config.php');
$db = new Database($config['database']);

//$posts = $db->query("SELECT * FROM customer")->fetchAll(PDO::FETCH_ASSOC);


$heading = 'Note';

$notes = $db->query('SELECT * FROM notes WHERE id = 1')->get();
//var_dump($notes);


//dd($notes);

require "views/notes/index.view.php";
