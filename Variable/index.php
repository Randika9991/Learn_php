<?php
$conn = new mysqli('localhost', 'root', '1234', 'my_php');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
if ($conn) {
    echo "Connect";
}

    require 'new.php';