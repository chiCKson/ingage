<?php 
 
function login(){
    if(isset($_SESSION['current_user_email'])){
        require 'views/home.php';
    }else{
        if(isset($_POST['email']) && isset($_POST['password']) ){
            $email =$_POST['email'];
            if($_POST['remember']=='true'){
                setcookie('user_email', $email, time() + (86400 * 30), "/");
            }else{
                
            } 
            $password = $_POST['password'];
            $pass_hashed = make_password_hashed($password);
            $db = new DB();
            $conn = $db->connect();
            if(check_credentials_true($db,$conn,$pass_hashed,$email)){
                $_SESSION['loggedin'] = true;
                $_SESSION['current_user_email']=$email;
                require 'views/home.php';
            }else{
                $_POST['alert-message']='Invalid Credentials.';
                require 'views/login.php';
            }
            $db->disconnect($conn);
        }else{
           require 'views/login.php';
        }  
    }
}
function go_to_home(){
    
}
function get_user_full_name($email){
    $db = new DB();
    $conn = $db->connect();
    $user = $db->getOnlyOneColumnFromTable($conn,'email',$email,'fName,lName','user');
    $db->disconnect($conn);
    $name ='';
    foreach ($user as $key => $value) {
        $name .= $value." ";
    }
    return $name;
}
function check_credentials_true($db,$conn,$password,$email){
    $password_saved_in_db=$db->getOnlyOneColumnFromTable($conn,'email',$email,'password','user');
    if($password_saved_in_db['password']==$password){
        return true;
    }else{
        return false;
    }
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
        $conn = $db->connect();
        if(check_email_already_exists($db,$conn,$_POST['email'])){
            $_POST['alert-message']='That email already exixts please try another.';
            require 'views/signup.php';
        }else{
            $db->addUser($conn,$_POST['firstName'],$_POST['lastName'],$_POST['username'],$_POST['email'],$password_hashed,$_POST['dob'],$_POST['gender']);
        }
        $db->disconnect($conn);
    }
}
function check_email_already_exists($db,$conn,$email){
   if($db->getOnlyOneColumnFromTable($conn,'email',$email,'email','user')==null){
       return false;
   }else{
       return true;
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
    unset($_COOKIE['user_email']);
    setcookie("user_email", "", time()-3600);
    $_SESSION['current_user_email']=null;
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
function share_post(){
    $sql ="insert into posts (user_email,username,post,date) values('".$_SESSION['current_user_email']."','".get_user_full_name($_SESSION['current_user_email'])."','".$_POST['content']."',now())";
    
    $db = new DB();
    $db->set_data($db->connect(),$sql);
}
function get_all_posts(){
    $sql="select * from posts";
    $db = new DB();
    $posts=$db->get_data($db->connect(),$sql);
    while($post=mysqli_fetch_assoc($posts)){
echo '<br><div class="card">
<div class="card-body">
  <a href="/profile?email='.$post['user_email'].'"<h5 class="card-title">'.$post['username'].'</a></h5>
  <p class="card-text">'.$post['post'].'.</p>
  <p class="card-text"><small class="text-muted">Shared on '.$post['date'].'</small></p>
</div>
<img class="card-img-bottom" src="./assets/images/bg.jpg" alt="Card image cap">
</div>';
    }
}
function get_profile(){
    $sql="select * from user where email='".$_GET['email']."'";
    $db = new DB();
    $users=$db->get_data($db->connect(),$sql);
    while($user=mysqli_fetch_assoc($users)){
        echo '<tr>
        <td align="center" rowspan="3" width="30%">
            <img style="width:250px;height:250px "src="assets/images/logo.png" alt="Card image">
        </td>
        <td>
        <h4 class="card-title">'.$user['fName'].' '.$user['lName'].'</h4><br>
        </td>
        <td valign="top" align="right">
        <button type="button" class="btn btn-primary" style="margin:10px" data-toggle="modal" data-target="#myModal" name="edit_btn">
Edit Profile
</button>
        </td>

    </tr>
    <tr><td>'.$user['email'].'</td></tr><tr><td>'.$user['date_of_birth'].'</td></tr>';
    }
}

?>