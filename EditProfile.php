<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//pls check 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//call update function and pass new update values
	$userId=$_GET['edituserid'];
	$newid = $_POST['userId'];
	$Fname = $_POST['userfName'];
	$Lname = $_POST['userlName'];
	$Uname = $_POST['userName'];
	$Email = $_POST['useremail'];
	$Sex = $_POST['usersex'];
	$Password = $_POST['userpassword'];
	$DateOfBirth = $_POST['userdate_of_birth'];
	echo $name;
	$check = EditUser($conn,$userId,$newid,$Fname,$Lname,$Uname,$Email,$Sex,$Password,$DateOfBirth);
	if ($check) {
		header('location:index.php');
	} else {
		die("Error in Edit");
	}
	
}
?>
<?php
// IF 1
	if (isset($_GET['edituserid'])) {
		$sid = $_GET['edituserid'];
		
	 	$st = GetUserDetails($conn,$_GET['edituserid']); 
	
	 	if (empty($st)) {
	 		echo "<h2>No User found</h2>";
	 	} else {
	 	
?>
<h1>Edit User Details</h1>

<form action="<?php echo $_SERVER['PHP_SELF'].'?edituserid='.$sid; ?>" method="post">
	<table>
	<tr>
			<td>User Id</td>
			<td><input type="text" value="<?php echo $st[0]['user_id']; ?>" name="userId"></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" value="<?php echo $st[0]['fName']; ?>" name="userfName"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" value="<?php echo $st[0]['lName']; ?>" name="userlName"></td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" value="<?php echo $st[0]['uName']; ?>" name="userName"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="number" value="<?php echo $st[0]['email']; ?>" name="useremail"></td>
		</tr>
	
		<tr>
			<td>Sex</td>
			<td><input type="text" value="<?php echo $st[0]['sex']; ?>" name="usersex"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" value="<?php echo $st[0]['password']; ?>" name="userpassword"></td>
		</tr>
		<tr>
			<td>DateOfBirth</td>
			<td><input type="Number" value="<?php echo $st[0]['date_of_birth']; ?>" name="userdate_of_birth"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Save" name="Editbtn"></td>
		</tr>
	</table>
</form>
<?php
	//	
?>
</body>
</html>
