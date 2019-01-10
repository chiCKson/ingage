<?php 
function login(){
    $email =$_POST['email'];
    $password = $_POST['password'];
    $pass_hashed = md5(sha1($password));
    if($_POST['remember']=='true'){
        echo "true";
    }else{
        echo 'false';
    }
    require 'views/home.php';
}
function register(){
    echo "registered";
}

?>