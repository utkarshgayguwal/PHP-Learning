<?php

$config = require base_path('config.php');
$db  = new Database($config['database']);

$query = "select * from notes where user_id = :user_id";
$notes = $db->query($query, ['user_id' => 1])->fetchAll();

view("notes/index.view.php", [ 
    'heading' => 'All Notes',
    'notes' => $notes
]);

