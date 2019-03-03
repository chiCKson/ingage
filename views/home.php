<?php 
require_once('template/header.php');?>
<title>Home</title>
<link rel="stylesheet" href="assets/styles/navbar.css">
</head>
<body>
<button type="button" class="btn btn-primary" style="margin:10px" data-toggle="modal" data-target="#myModal" name="view_btn">
    View Profile
  </button>
  <?php
   <?php
    if(isset($_POST['view_btn'])){
        if(isset($_GET['userid'])){
                show_userDetails();
        }
    }
    ?>
<?php
require_once('template/navigation.php');

 
?>
<h1>this is home</h1>