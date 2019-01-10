<?php 
require_once('functions/function.php');
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
    switch ($request_uri[0]) {
        case '/':
            require 'views/login.php';
            break;
        case '/signup':
            require 'views/signup.php';
            break;
        case '/profile':
            require 'views/profile.php';
            break;
        case '/login':
            login();
            break;
        case '/register':
            register();
            break;
        default:
            header('HTTP/1.0 404 Not Found');
            require 'views/404.php';
            break;
    }
?>