<?php 

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/note-create', 'controllers/notes/create.php');

$router->post('/note-store', 'controllers/notes/store.php');
$router->post('/note-delete', 'controllers/notes/destroy.php');

