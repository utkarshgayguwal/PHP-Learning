<?php

use Core\Database;

$heading = "Note Description"; 

$config = require base_path('config.php');
$db  = new Database($config['database']);


$currentUser = 1;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $query = "select * from notes where id = :id";
    $note = $db->query($query, ['id' => $_POST['id']])->fetchOrAbort();
    authorised($note['user_id'] === $currentUser);
    $db->query("delete from notes where id = :id", ['id' => $_POST['id']]);
    header("Location: /notes");
    exit;
}


$query = "select * from notes where id = :id";
$note = $db->query($query, ['id' => $_GET['id']])->fetchOrAbort();

authorised($note['user_id'] === $currentUser);

view("notes/show.view.php", [ 
    'heading' => 'All Notes',
    'note' => $note
]);

