<!DOCTYPE html>
<html>
<body>
<?php require_once('template/navigation.php');
require_once('connection/connection.php');
echo $_GET['uid'];
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
			
			$sql = "select `fName`, `lName` FROM `user` where `email`='".$_GET['userid']."'";
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
			
			$sql = "select `sex` FROM `user` where `email`='".$_GET['userid']."'";
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
		
			$sql = "select `email` FROM `user` where `email`='".$_GET['userid']."'";
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
 
<?php
function get_data($sql){
    $conn=connect();
    $result=mysqli_query($conn,$sql); 
    return $result;
    mysqli_free_result($result);
    disconnect($conn);
}

function show_userDetails(){
    $sql  = "select  * from user where email='".$_GET['userid']."'";
    
    $users=get_data($sql);
    $user=mysqli_fetch_assoc($users);
    echo "<tr><td valign='top' colspan='3'><h1>".$user['name']."</h1><hr></td></tr><tr>
    <td valign='top' rowspan='8'><img src='./img/profimage/".$user['profimage']."'></td>";
    foreach($user as $key=>$value){
        if($key=='coverimage'||$key=='Movie_id'){

        }else{
            echo "<td><Strong>".$key."</Strong><br>".$value."</td></tr><tr>";
        }
    }
    echo "<td><a href='index.php'>Go back </a></td><td>";
    


}
?>

 
</div>

</main>

<?php 
require_once('template/modal/editprofile.php');
require_once('template/footer.php');
 ?>
</body>
</html>