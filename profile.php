<?php
require_once('ui/header.php');
?>
<!-- in fb profile page there is no form for viewing data its should be in edit profile use label instead of input-->
<link rel="stylesheet" href="assets/styles/navbar.css">
	<title>view profile</title>
</head>
<body>
<?php require_once('ui/navigation.php'); ?>
<main role="main" class="container">

<div class="card">
	<table>
		<tr>
			<td rowspan="4" colspan="1" background="assets/images/bg.jpg" style=" background-size: cover;">
				<img style="width:250px;height:250px"src="assets/images/logo.png" alt="Card image">
			</td>
			<td>
			<h4 class="card-title">John Doe</h4>
			</td>
	
		</tr>
		<tr>
			<td>
			<p class="card-text">Homagama</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Male</p>
			</td>
		</tr>
		<tr>
			<td>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Edit Profile
  </button>
			</td>
		</tr>
	</table>
  

   
	
	
	
    
  </div>
</div>

</main>

<?php 
require_once('ui/modal/editprofile.php');
require_once('ui/footer.php');
 ?>
</body>
</html>