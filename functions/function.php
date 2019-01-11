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
    
    if(!check_password_equility($_POST['password'],$_POST['confirm_password'])){
        $_POST['alert-message']='Passwords are not the same.please retype the passwords';
        require 'views/signup.php';
    }else{
        $db = new DB();
        $password_hashed=make_password_hashed($_POST['password']);
        $db->addUser($_POST['firstName'],$_POST['lastName'],$_POST['username'],$_POST['email'],$password_hashed,$_POST['dob'],$_POST['gender']);
    }
}
function check_password_equility($pass1,$pass2){
  
    if($pass1==$pass2){
        return true;
    }
    return false;
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