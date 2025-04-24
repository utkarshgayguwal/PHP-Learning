<?php

require "function.php";
class Database
{
    public $dsn = "mysql:host=localhost;port=3306;user=root;password=password;dbname=php_beginners;charset=utf8mb4";
    public $pdo;
    public function __construct(){
        $this->pdo = new PDO($this->dsn);
    }
    public $pdo = new PDO($this->dsn);
    public function query()
    {
        $statement = $this->pdo->prepare('select * from posts');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();
$posts = $db->query();
foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}
die();
require "router.php";
