<?php

$heading = "Note Creation"; 

$config = require 'config.php';

$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$db  = new Database($dsn);

$description = trim($_POST['description']);
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if(strlen($description) === 0){
        $errors['description'] = 'Description is Required.';
    }

    if(strlen($description) > 1000){
        $errors['description'] = 'Description should not more than 1000 characters.';
    }

    if(empty($errors)){
        $query = "INSERT INTO notes(description, user_id) values(:description, :user_id)";
        $note = $db->query($query, ['description' => $description, 'user_id' => 1]);
    }
}

// authorised($note['user_id'] === $currentUser);
require "views/note-create.view.php";