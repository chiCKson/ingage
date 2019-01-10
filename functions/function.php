<?php 
function login(){
    $email =$_POST['email'];
    $password = $_POST['password'];
    $pass_hashed = make_password_hashed($password);
    $_SESSION['loggedin'] = true;
    if($_POST['remember']=='true'){
        //update db user with logged in
    }else{
        
    }

    require 'views/home.php';
}
function make_password_hashed($pass){
    return md5(sha1($pass));
}
function register(){
    echo "registered";
}
function check_previously_loggedin(){
   return $_SESSION['loggedin'];
}
function signout(){
    $_SESSION['loggedin'] = false;
}
function get_user_profile(){
    if(!check_previously_loggedin()){
        $_POST['alert-message']='You are not logged in. Please Log in to access the page.';
        require 'views/login.php';
    }else{
        if($_GET == null){
            $uid = "test1234";
            $url = "/profile?id=".$uid;
            header('Location: '.$url);
        }
        require 'views/profile.php';
    }
   
}

?>