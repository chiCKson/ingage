<?php
require_once('ui/header.php');
?>
	<!DOCTYPE html>
<html>
<head>
	<title>viwe proile</title>
</head>
<body>
	<form action="URL" method="post">
	<fieldset style="width:700px">
    <legend>Personalia:</legend>
	
	<table>
		<tr>
			<td rowspan="6">
				<img src="profilepic.jpg" alt="profile image"
					name="profile" style="float:center;width:275px;height:250px;"></td>
					

		<tr>
			<td>Name :</td>
			<td><input  type="text" name="Fullname" size="15"></td>
		</tr>
		<tr>
			<td>Lives in :</td>
			<td><input  type="text" name="Lname" size="15"></td>
		</tr>
		<tr>
			<td>Gender :</td>
			<td><input type="radio" name="sex" value="Male">Male
				<input type="radio" name="sex" value="female" checked>female</td>
		</tr>
		<tr>
			<td>Birthday :</td>
			<td><input type="date" max=2019-01-01 min=1950-01-01></td>
		</tr>
		<tr>
			<td><input type="submit" value="Edit profile">	</td>
		</tr>
	
	
	</table>
    
	</fieldset>
	
	<fieldset style="width:700px">
    <legend>Contact Details</legend>
	<table>
	<tr>
		<!--<td><input type="image" src="ins.jpg" width="100" height="50" alt="button"></td>
		<td><input type="image" src="tw.png" width="100" height="50" alt="button"></td>
		<td><input type="image" src="link.png" width="100" height="50" alt="button"></td>
		<td><input type="image" src="fac.jpg" width="100" height="50" alt="button"></td>-->
	</tr>
	<tr>
		<td>Contact No:</td>
		<td><input type ="tel"</td>
		<td>Email :</td>
		<td><input type="email"></td>
	</tr>
	
	
	
	</table>
    
  </fieldset>
</form>
</body>
</html>