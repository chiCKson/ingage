<?php 
function login(){
    $email =$_POST['email'];
    $password = $_POST['password'];
    $pass_hashed = md5(sha1($password));
    require 'views/home.php';
}
function register(){
    echo "registered";
}

?>