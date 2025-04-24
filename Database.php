<?php

class Database
{
    public $pdo;
    public function __construct($dsn)
    {
        $this->pdo = new PDO($dsn);
    }
    public function query($query)
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }
}