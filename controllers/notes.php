<?php

$heading = "All Notes"; 


$config = require 'config.php';

$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$db  = new Database($dsn);

$query = "select * from notes";
$notes = $db->query($query)->fetchAll();
// dd($notes);

require "views/notes.view.php";
