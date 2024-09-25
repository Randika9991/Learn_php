<?php

$heading = 'Login';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//    echo "itswork";
    dd($_POST);

}


require "views/Login.view.php";