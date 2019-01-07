<?php require_once('ui/header.php'); ?>
<link rel="stylesheet" href="assets/styles/signin.css">
 <title>Sign Up</title>
   
</head>
<body>
<body class="text-center">
            <form class="form-signin" action="/postsignup/" method="POST" autocomplete="off">
                   
                   
              <img  src="assets/images/logo.png" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">iTRaveler</h1>

              <label for="inputName" class="sr-only">User Name</label>
              <input type="text" name="name" class="form-control" placeholder="User Name" required autofocus>

              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" name="email" class="form-control" placeholder="Email address" required >

              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
 
              
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                <button class="btn btn-lg btn-secondary btn-block" type="reset" >Cancel</button>
            
            
            
            </form>

</body>
</html>