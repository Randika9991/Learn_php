<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=spicy_flavour;charset=utf8";
        $username = 'root';
        $password = '1234'; // password

        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}