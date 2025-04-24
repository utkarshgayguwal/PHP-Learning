<?php

require "function.php";
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
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$database = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'password',
    'port' => '3306',
    'dbname' => 'php_beginners',
    'charset' => 'utf8mb4'
];


$dsn = 'mysql:' . http_build_query($database, '', ';');

$db    = new Database($dsn);
$posts = $db->query('select * from posts');
foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}
die();

require "router.php";
