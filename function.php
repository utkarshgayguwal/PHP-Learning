<?php 

function dd($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die();
}

function getHeading(){
    $endPoint = $_SERVER['REQUEST_URI'];
    if($endPoint === '/'){
        $heading = 'Home';
    }else if( $endPoint === '/about'){
        $heading = 'About Us';
    }else if( $endPoint === '/contact'){
        $heading = 'Contact Us';
    }
    return $heading;
}


function uri($path){
    return $_SERVER['REQUEST_URI'] == $path ? "bg-gray-900 text-white" : "text-gray-300" ;
}

function authorised($condition, $status = Response::FORBIDDEN){
    if (!$condition){
        abort($status);
    }
}



