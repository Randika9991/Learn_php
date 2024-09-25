<?php

$heading = 'CreateNewAccount';

$config = require('config.php');
$db = new Database($config['database']);

// Include the view file (template)
//echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900 text-white' : 'text-gray-300';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//    dd($_POST['name']);
//    dd($_POST['email']);
//    dd($_POST['password']);

//    $db->query('INSERT INTO users(full_name, email_address,password) VALUES(:full_name, :email_address, :password)', [
//        'full_name' => $_POST['name'],
//        'email_address' => $_POST['email'],
//        'password' =>$_POST['password']
//    ]);

    $email = $_POST['email'];

    if ($email) { // Check if email is not null
        $existingUser = $db->query('SELECT * FROM users WHERE email_address = :email', ['email' => $email])->find();
        if ($existingUser) {
            echo $email . " is already registered. Please choose another email.";
        } else {
            $db->query('INSERT INTO users(full_name, email_address,password) VALUES(:full_name, :email_address, :password)', [
                'full_name' => $_POST['name'],
                'email_address' => $_POST['email'],
                'password' =>$_POST['password']
            ]);
        }
    } else {
        echo "No email provided.";
    }


//    header("Location: success.php"); // Redirect to a success page
//    exit();

}

require "views/CreateNewAccount.view.php";