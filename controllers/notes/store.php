<?php

use Core\Database;
use Core\Validation;

require base_path('Core/Validation.php');
$heading = "Note Creation";

$config      = require base_path('config.php');
$db          = new Database(config: $config['database']);
$description = trim($_POST['description']);
$errors      = [];

if (! Validation::string($description, 1, 1000)) {
    $errors['description'] = 'A Description of not more than 1000 characters is required';
}

if (empty($errors)) {
    $query       = "INSERT INTO notes(description, user_id) values(:description, :user_id)";
    $note        = $db->query($query, ['description' => $description, 'user_id' => 1]);
    $description = '';
    header('Location: /notes');
    exit;
}

// authorised($note['user_id'] === $currentUser);
view("notes/create.view.php", [
    'heading'     => 'All Notes',
    'errors'      => $errors,
    'description' => $description,
]);
