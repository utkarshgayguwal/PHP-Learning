<?php

class Database
{
    public $pdo;
    public function __construct($dsn)
    {
        $this->pdo = new PDO($dsn, null, null, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}