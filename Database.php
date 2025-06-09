<?php

class Database
{
    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=myapp;charset=utf8mb4;port=3306";

        $this->connection = new PDO($dsn, 'root', '1234');
    }
    public function query(string $query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}

