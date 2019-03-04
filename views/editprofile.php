<?php 
require_once('template/header.php');?>
<title>Edit Profile</title>
<link rel="stylesheet" href="assets/styles/navbar.css">
<link rel="stylesheet" href="assets/styles/home.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/home.js"></script>
</head>
<body>

  
  
<?php
require_once('template/navigation.php');

 
?>
<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
    <form class="form-horizontal" action="" enctype="multipart/form-data" method="post" role="form">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img id="blah" src="//placehold.it/100" width="100" height="100"  class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input name="myfile" onchange="readURL(this);" type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
        
        
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input name="fname" class="form-control" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input name="lname"  class="form-control" type="text" >
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input name="email" class="form-control" type="text" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input name="username"  class="form-control" type="text" >
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input name="submit" type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

<?php 
if(isset($_POST['submit'])){
  update_profile();
}

require('views/template/footer.php');
?>

