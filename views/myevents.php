<?php 
require_once('template/header.php');?>
<title>My Events</title>
<link rel="stylesheet" href="assets/styles/navbar.css">
<link rel="stylesheet" href="assets/styles/event.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/home.js"></script>
	
</head>
<body>

  
  
<?php
require_once('template/navigation.php');

 
?>
   <div class="container">
		<div class="row">
			<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
				<ul class="event-list">
                    <?php
                     get_events($sql);
                    ?>

				
				
				</ul>
			</div>
		</div>
	</div>



<?php require('views/template/footer.php');
?>

