<?php


$config = require('config.php');
$db = new Database($config['database']);

//$posts = $db->query("SELECT * FROM customer")->fetchAll(PDO::FETCH_ASSOC);


$heading = 'Note';

$notes = $db->query('SELECT * FROM customer WHERE custId = "CUS-005"')->fetchAll(PDO::FETCH_ASSOC);
//var_dump($notes);


//dd($notes);

require "views/Note.view.php";
