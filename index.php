<?php

require "function.php";
require "Database.php";

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


$posts = $db->query('select * from posts')->fetchAll(PDO::FETCH_ASSOC);
// dd($posts);
foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}
die();

require "router.php";
