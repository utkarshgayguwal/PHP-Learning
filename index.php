<?php

require "function.php";
require "Database.php";

$config = require 'config.php';

$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$db  = new Database($dsn);

$posts = $db->query('select * from posts')->fetchAll();
// dd($posts);
foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}
die();

require "router.php";
