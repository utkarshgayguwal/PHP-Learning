<?php

use Core\Database;

$config = require base_path('config.php');
$db  = new Database($config['database']);

$currentUser = 1;

$query = "select * from notes where id = :id";
$note = $db->query($query, ['id' => $_POST['id']])->fetchOrAbort();
authorised($note['user_id'] === $currentUser);
$db->query("delete from notes where id = :id", ['id' => $_POST['id']]);

header("Location: /notes");
exit;


