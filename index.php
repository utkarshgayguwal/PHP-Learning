<?php

require "function.php";
$dsn = "mysql:host=localhost;port=3306;dbname=php_beginners;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', 'password');
// $statement = $pdo->query('select * from posts');
$statement = $pdo->prepare('select * from posts');
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach( $posts as $post ){
    echo '<li>' . $post['title']. '</li>' ;
}

die();
require "router.php";

