<!DOCTYPE html>
<html>
<head>
//
	<title></title>
</head>
<body>
<?php
// Check
// IF 2
	if (isset($_GET['deluserId'])) {
	 	$st = GetUserDetails($conn,$_GET['deluserId']);
		
	 	if (isset($_GET['confirm'])) {
	 	 	if ($_GET['confirm'] == "yes") {
	 	 		//call delete function
	 	 		$check = DeleteUser($conn,$_GET['deluserId']);
	 	 		
	 	 		if ($check) {
	 	 			header('location:index.php');
	 	 		}
	 	 		else{
	 	 			
	 	 			die("Error could not delete");
	 	 		}
	 	 		
	 	 	}
	 	 } 
	
?>
<h3>Do you want to delete your  <?php echo $st[0]['userName']; ?> ?</h3>
<table>
<?php
foreach ($st[0] as $key => $value) {
	echo "<tr>
		<td align='right'><b>$key:</b></td>
		<td>$value</td>
	</tr>";
}

?>	
</table>
<a href="index.php">No</a>
<a href="index.php?deluserId=<?php echo $_GET['deluserId']; ?>&confirm=yes">Yes</a>
<?php
	//End of IF 2
	}
	else{
		echo "<h2>404 nothing found</h2>";
	}
?>
</body>
</html>
