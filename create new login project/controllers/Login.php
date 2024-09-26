<?php

$heading = 'Login';
$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


//    dd($_POST['email']);
//    dd($_POST['password']);

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email && $password) {
        $existingUser = $db->query('SELECT * FROM users WHERE email_address = :email AND password = :password', [
            'email' => $email,
            'password' => $password
        ])->find();
        if ($existingUser) {
//            echo "User found. Proceed with login.";
            header("Location: /home");
        }
    }
}


require "views/Login.view.php";