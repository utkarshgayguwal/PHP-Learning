<?php 

use Core\Response;

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require base_path("routes.php");

RouterToController($uri, $routes);
function RouterToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require base_path($routes[$uri]);
    }else{
        abort(Response::NOT_FOUND_ERR);
    }
}

function abort($code=404){
    http_response_code($code);
    require base_path("controllers/{$code}.php");
    die();
}