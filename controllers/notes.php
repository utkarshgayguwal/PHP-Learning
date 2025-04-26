<?php

$heading = "All Notes"; 


$config = require 'config.php';

$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$db  = new Database($dsn);

$query = "select * from notes where user_id = :user_id";
$notes = $db->query($query, ['user_id' => 1])->fetchAll();



require "views/notes.view.php";
