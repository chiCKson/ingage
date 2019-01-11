<?php 
session_start();
require_once('functions/function.php');
require_once('connection/connection.php');
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
    switch ($request_uri[0]) {
        case '/':
            require 'views/login.php';
            break;
        case '/signup':
            require 'views/signup.php';
            break;
        case '/profile':
            get_user_profile();
            break;
        case '/login':
            login();
            break;
        case '/register':
            register();
            break;
        case '/signout':
            signout();
            require 'views/login.php';
            break;
        default:
            header('HTTP/1.0 404 Not Found');
            require 'views/404.php';
            break;
    }
?>