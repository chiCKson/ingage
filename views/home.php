<?php 
require_once('template/header.php');?>
<title>Home</title>
<link rel="stylesheet" href="assets/styles/navbar.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

  
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
<table width="100%">
<tr>
<td width="25%" valign="top" rowspan="2">

<div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
</td>
<td width="50%">  
<div class="col-md-5" >
               <form action="" method="post">
                  
                         <textarea  cols="102" rows="3" name="content" placeholder="What's on your mind" ></textarea>
                   <input type="submit" class="btn btn-primary" style="margin-right:10px;" name="post_status" value="Share">
               </form>         
                <?php 
                if(isset($_POST['post_status'])){
                  share_post();
                }
                ?>
         </div> </td>
<td width="25%"></td>
</tr>
<tr>


<td width="50%">
<?php 
get_all_posts();
?>

</td>
<td width="50%"></td>
</tr>

</table>