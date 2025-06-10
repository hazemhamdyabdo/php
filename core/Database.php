<?php

namespace Core;

use PDO;
use Response;

class Database
{
    public $connection;
    public $statement;
    public function __construct($config, $userName = 'root', $password = '1234')
    {
        $dsn = "mysql:" . http_build_query($config, "", ";");

        $this->connection = new PDO($dsn, $userName, $password);
    }
    public function query(string $query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function findAndFail()
    {
        $result = $this->statement->fetch();
        if (!$result) {
            abort(Response::NOT_FOUND);
        }
        return $result;
    }

    public function getAll()
    {
        $result = $this->statement->fetchAll();
        return $result ? $result : [];
    }
}
