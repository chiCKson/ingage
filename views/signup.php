<?php require_once('template/header.php'); ?>

 <title>Sign Up</title>

    <link href="assets/styles/signup.css" rel="stylesheet">
  </head>
  <body class="bg-light">
  <div class="container">
  <div class="py-5 text-center">
  <img  src="assets/images/logo.png" alt="" width="72" height="72">
    <h2>Register</h2>
    <?php
            if(isset($_POST['alert-message'])){
              echo  "<div class=\"alert alert-danger\">
              ".$_POST['alert-message']."
            </div>";
            }
            ?>
  
    </div>
    <div class="">
      <h4 class="mb-3">Personal Information</h4>
      <form class="needs-validation" action="/register" method="POST" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Your Password" required>
          <div class="invalid-feedback">
            Please enter a password.
          </div>
        </div>

        <div class="mb-3">
          <label for="confirm_password">Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password" placeholder="Retype your Password" required>
        </div>
      

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Date of Birth</label>
            <input type="date" class="form-control" name="dob" required>
            </select>
            <div class="invalid-feedback">
              Please select a valid date.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Gender</label>
            <select class="custom-select d-block w-100" name="gender" required>
              <option value="">Choose...</option>
              <option>Male</option>
              <option>Female</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid Gender.
            </div>
          </div>
          
        </div>
       
        <hr class="mb-4">
        
        <button class="btn btn-primary btn-lg btn-block" type="submit">Sign Up</button>
      </form>
    </div>
  </div>

 
</div>
 <?php require_once('views/template/footer.php');?>
  <script src="https://getbootstrap.com/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
  <script src="assets/js/form-validation.js"></script>
</body>
</html>