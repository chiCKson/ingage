<?php 
require_once('template/header.php');?>
<title>Home</title>
<link rel="stylesheet" href="assets/styles/navbar.css">
<link rel="stylesheet" href="assets/styles/home.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/home.js"></script>
	
</head>
<body>

  
  
<?php
require_once('template/navigation.php');

 
?>
<h1>this is home</h1>
<div style="margin:50px">

<table width="100%">
<tr>
<td width="25%" valign="top" rowspan="2">
<div class="card" style="width: 18rem;">
  <div class="card-header">
    Events
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
   
</td>
<td width="50%">  
<div class="col-md-5" >
 <form enctype="multipart/form-data" action="" method="post">
                  
<textarea  cols="102" rows="3" name="content" placeholder="What's on your mind" ></textarea>
                  

  <button type="submit" class="btn btn-primary" style="margin-right:10px;"  name="post_status" >Share</button>
  
  
  
  <input class="upload-btn-wrapper-file" type="file" name="myfile" onchange="readURL(this);"/>
  



  <img id="blah" src="http://placehold.it/180" alt="your image" width="100" height="100" />
</form> 
            
                <?php 
                if(isset($_POST['post_status'])){
                  share_post();
                  upload_image();
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
<td width="50%">
</td>
</tr>

</table>
</div>
<script>

    $('#blah').hide();
    
 

</script>

