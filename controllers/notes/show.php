<?php

use Core\Database;

$heading = "Note Description"; 

$config = require base_path('config.php');
$db  = new Database($config['database']);
$currentUser = 1;

$query = "select * from notes where id = :id";
$note = $db->query($query, ['id' => $_GET['id']])->fetchOrAbort();

authorised($note['user_id'] === $currentUser);

view("notes/show.view.php", [ 
    'heading' => 'All Notes',
    'note' => $note
]);

