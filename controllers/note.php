<?php

$heading = "Note Description"; 

$config = require 'config.php';

$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$db  = new Database($dsn);


$id = $_GET['id'];
$currentUser = 1;
$query = "select * from notes where id = :id";
$note = $db->query($query, ['id' => $_GET['id']])->fetch();

if(!$note){
    return  require("views/404.view.php");
}

if($note['user_id'] !== $currentUser){
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";