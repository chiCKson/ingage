<?php 
require_once('template/header.php');?>
<title>Home</title>
<link rel="stylesheet" href="assets/styles/navbar.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php 

require_once('template/navigation.php');
require_once('connection/connection.php');

 ?>
<main role="main" class="container">
 
<div class="card">
	<table>
	<?php 
	if(isset($_GET['email'])){
		get_profile();
	}
	
	?>
		
		
	
		
	</table>
 

 
</div>

</main>

<?php 
require_once('template/modal/editprofile.php');
require_once('template/footer.php');
 ?>
</body>
</html>