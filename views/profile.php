<!DOCTYPE html>
<html>
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
			<?php
			//not finish,have to give user_id`
			$sql = "select `fName`, `lName` FROM `user` where `user_id`=1";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
   
				while($row = mysqli_fetch_assoc($result)) {
				echo  "<h4 class="card-title">". $row["fName"]. " " . $row["lName"]. "</h4><br>";
				}
			} else {
			echo "0 results";
			}?>
			</td>
			<td valign="top" align="right">
			<button type="button" class="btn btn-primary" style="margin:10px" data-toggle="modal" data-target="#myModal">
    Edit Profile
  </button>
			</td>
	
		</tr>
		<tr>
			<td>
			<?php
			$sql = "select `sex` FROM `user` where `user_id`=1";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
    
				while($row = mysqli_fetch_assoc($result)) {
					echo  "<p>" .$row["sex"]."</p><br>";
				}
			} else {
				echo "0 results";
			}?>
			</td>
		</tr>
		<tr>
			<td>
			<?php
			$sql = "select `email` FROM `user` where `user_id`=1";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				
				while($row = mysqli_fetch_assoc($result)) {
					echo  "<p>". $row["email"]."</p><br>";
				}
			} else {
				echo "0 results";
			}?>
			</td>
		</tr>
		
	</table>
 


 
</div>

</main>

<?php 
require_once('template/modal/editprofile.php');
require_once('template/footer.php');
 ?>
</body>
</html>