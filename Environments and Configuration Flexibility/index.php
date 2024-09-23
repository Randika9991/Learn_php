<?php

require "Functions.php";

//dd($_SERVER);
//dd(parse_url($uri));

//require 'router.php';

require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);

$posts = $db->query("SELECT * FROM customer")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post)
{
    echo "<li>" . $post['custName'] . "</li>";
    echo "<li>" . $post['custId'] . "</li>";
}


