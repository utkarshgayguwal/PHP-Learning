<?php

$heading = "Note Description"; 

$config = require 'config.php';

$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$db  = new Database($dsn);


$id = $_GET['id'];
$query = "select * from notes where id = :id";
$note = $db->query($query, ['id' => $_GET['id']])->fetch();

require "views/note.view.php";