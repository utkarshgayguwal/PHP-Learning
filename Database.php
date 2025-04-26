<?php

class Database
{
    public $pdo;
    public $statement;
    public function __construct($dsn)
    {
        $this->pdo = new PDO($dsn, null, null, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {
        $this->statement = $this->pdo->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function fetch(){
        return $this->statement->fetch();
    }
    
    public function fetchAll(){
        return $this->statement->fetchAll();
    }
    
    public function fetchOrAbort(){
        $result = $this->statement->fetch();
        if(!$result){
            abort();
        }
        return $result;
    }
}