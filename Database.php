<?php

class Database
{
    public $connection;
    public function __construct($config,$userName='root',$password='1234')
    {
        $dsn = "mysql:" . http_build_query($config,"",";");

        $this->connection = new PDO($dsn, $userName, $password);
    }
    public function query(string $query,$params=[])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}

