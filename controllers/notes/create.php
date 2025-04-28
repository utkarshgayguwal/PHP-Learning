<?php

require 'Validation.php';
$heading = "Note Creation"; 

$config = require 'config.php';
$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$db  = new Database($dsn);
$validator = new Validation();
$description = trim($_POST['description']);

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if(!$validator->string($description, 1, 1000)) {
        $errors['description'] = 'A Description of not more than 1000 characters is required';
    }

    if(empty($errors)){
        $query = "INSERT INTO notes(description, user_id) values(:description, :user_id)";
        $note = $db->query($query, ['description' => $description, 'user_id' => 1]);
        $description = '';
    }
}

// authorised($note['user_id'] === $currentUser);
require "views/notes/create.view.php";