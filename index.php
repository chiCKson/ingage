<?php 
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
// Route it up!


    switch ($request_uri[0]) {
        // Home page
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
            require 'views/home.php';
            break;
        // Everything else
        default:
            header('HTTP/1.0 404 Not Found');
            require 'views/404.php';
            break;
    }

function loginPostData(){
    foreach($_POST as $key => $value)
    {
     echo $value;
    }
}

?>