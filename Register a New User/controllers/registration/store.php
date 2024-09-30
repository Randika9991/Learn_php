<?php
use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}
if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}
if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('select * from users where email_address = :email', [
    'email' => $email
])->find();

if ($user) {
//    header('location: /');
} else {
    $create = $db->query('INSERT INTO users(full_name, email_address,password) VALUES(:full_name, :email_address, :password)', [
        'full_name' => $name,
        'email_address' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
    if ($create) {

        header('location: /session');
        login($user);
        exit();
    }
}