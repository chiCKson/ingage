<?php 
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
// Route it up!
if($request_uri[1]!=null){
    $request_uri_with_parameters = explode('=',$request_uri[1],2);
    switch($request_uri[0]){
        case '/profile':
            header("id=123");
            require 'views/profile.php';
            break;
            break;
        default:
            header('HTTP/1.0 404 Not Found');
            require 'views/404.php';
            break;
    }
}else{
    switch ($request_uri[0]) {
        // Home page
        case '/':
            require 'views/login.php';
            break;
        case '/signup':
            require 'views/signup.php';
            break;
        // Everything else
        default:
            header('HTTP/1.0 404 Not Found');
            require 'views/404.php';
            break;
    }
}

?>