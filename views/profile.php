<?php
require_once('template/header.php');
?>
<!-- in fb profile page there is no form for viewing data its should be in edit profile use label instead of input-->
<link rel="stylesheet" href="assets/styles/navbar.css">
	<title>view profile</title>
</head>
<body>
<?php require_once('template/navigation.php');
echo $_GET['id'];
 ?>
<main role="main" class="container">

<div class="card">
	<table>
		<tr>
			<td align="center" rowspan="3" width="30%">
				<img style="width:250px;height:250px "src="assets/images/logo.png" alt="Card image">
			</td>
			<td>
			<h4 class="card-title">John Doe</h4>
			</td>
			<td valign="top" align="right">
			<button type="button" class="btn btn-primary" style="margin:10px" data-toggle="modal" data-target="#myModal">
    Edit Profile
  </button>
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
		
	</table>
  

   
	
	
	
    
  </div>
</div>

</main>

<?php 
require_once('template/modal/editprofile.php');
require_once('template/footer.php');
 ?>
</body>
</html>