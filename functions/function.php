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
        require 'views/profile.php';
    }
}
function share_post(){
    $sql ="insert into posts (user_email,username,post,date,image) values('".$_SESSION['current_user_email']."','".get_user_full_name($_SESSION['current_user_email'])."','".$_POST['content']."',now(),'".basename( $_FILES["myfile"]["name"])."')";
    
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
<img class="card-img-bottom" src="./uploads/'.$post['image'].'" alt="Card image cap">
</div>';
    }
}
function get_profile(){
    $sql="select * from user where email='".$_GET['email']."'";
    $db = new DB();
    $users=$db->get_data($db->connect(),$sql);
    while($user=mysqli_fetch_assoc($users)){
       if($_GET['email']== $_SESSION['current_user_email']){
        echo '<tr>
        <td align="center" rowspan="3" width="30%">
            <img style="width:250px;height:250px "src="assets/images/logo.png" alt="Card image">
        </td>
        <td>
        <h4 class="card-title">'.$user['fName'].' '.$user['lName'].'</h4><br>
        </td>
        <td valign="top" align="right">
        <button type="button" class="btn btn-primary" style="margin:10px"  onclick="editprofile()" name="edit_btn">
        
Edit Profile
</button>
        </td>

    </tr>
    <tr><td>'.$user['email'].'</td></tr><tr><td>'.$user['date_of_birth'].'</td></tr>';
       }else{
        echo '<tr>
        <td align="center" rowspan="3" width="30%">
            <img style="width:250px;height:250px "src="assets/images/logo.png" alt="Card image">
        </td>
        <td>
        <h4 class="card-title">'.$user['fName'].' '.$user['lName'].'</h4><br>
        </td>
        <td valign="top" align="right">
       
        </td>

    </tr>
    <tr><td>'.$user['email'].'</td></tr><tr><td>'.$user['date_of_birth'].'</td></tr>';
       }
    }
}
function upload_image(){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $uploadOk = 1;
    $msg='';
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["post_status"])) {
        $check = getimagesize($_FILES["myfile"]["tmp_name"]);
        if($check !== false) {
            $msg="File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $msg="File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $msg= "Sorry, file already exists.";
    $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["myfile"]["size"] > 500000) {
        $msg= "Sorry, your file is too large.";
    $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $msg= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg= "Sorry, your file was not uploaded.";
        echo '<div class="alert alert-danger" role="alert">'.$msg.'
        </div>';
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
        $msg= "The file ". basename( $_FILES["myfile"]["name"]). " has been uploaded.";
        echo '<div class="alert alert-success" role="alert">'.$msg.'
    </div>';
    } else {
        $msg= "Sorry, there was an error uploading your file.";
        echo '<div class="alert alert-danger" role="alert">'.$msg.'
        </div>';
    }
    }
}
function add_event(){
    $sql = "insert into events (user_email,name,date,description,location,facebook,twitter,google_plus,website) values('".$_SESSION['current_user_email']."','".$_POST['event_name']."','".$_POST['event_date']."','".$_POST['description']."','".$_POST['location']."','".$_POST['facebook']."','".$_POST['twitter']."','".$_POST['google-plus']."','".$_POST['website']."')";
    $db = new DB();
    $db->set_data($db->connect(),$sql);
    header('Location: /home');
}
function get_all_events_name(){
    $sql="select * from events order by date desc limit 5";
    $db = new DB();
    $events=$db->get_data($db->connect(),$sql);
    while($event=mysqli_fetch_assoc($events)){
        echo '<li class="list-group-item"><a href="">'.$event['name'].'</a></li>';
    }
}
function get_events($sql){
    
    $db = new DB();
    $months = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July ', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', );
    $events=$db->get_data($db->connect(),$sql);
    while($event=mysqli_fetch_assoc($events)){
        echo '<li>
        <time datetime="'.$event['date'].'">
            <span class="day">'.substr($event['date'],8,10).'</span>
            <span class="month">'.$months[(int)substr($event['date'],5,7)-1].'</span>
            <span class="year">'.substr($event['date'],0,4).'</span>
            <span class="time">12:00 AM</span>
        </time>
        <div class="info">
            <h2 class="title">'.$event['name'].'</h2>
            <p class="desc">'.$event['description'].'</p>
            <ul>
                <li style="width:50%;"><a href="'.$event['website'].'"><span class="fa fa-globe"></span> Website</a></li>
                
            </ul>
        </div>
        <div class="social">
            <ul>
                <li class="facebook" style="width:33%;"><a href="'.$event['facebook'].'"><span class="fa fa-facebook"></span></a></li>
                <li class="twitter" style="width:34%;"><a href="'.$event['twitter'].'"><span class="fa fa-twitter"></span></a></li>
                <li class="google-plus" style="width:33%;"><a href="'.$event['google_plus'].'"><span class="fa fa-google-plus"></span></a></li>
            </ul>
        </div>
    </li>';
    }
}

?>