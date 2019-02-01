<?php

//check
function GetUserDetails($conn,$userId)
{
	$query = "select * from user where id ='$userId'";
	$users = array();
	$i = 0;
	$result = mysqli_query($conn,$query);
		if ($result) {
			$num_of_rows = mysqli_num_rows($result);
			if ($num_of_rows > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$users[$i] = $row;
					$i++;
				}
				mysqli_free_result($result);
			}
			else{
			//table empty
			$users = null;
		}
			
		}
		else{
			//error
			$users = null;
		}

	return $users;
}


function EditUser($conn,$userId,$newid,$Fname,$Lname,$Uname,$Email,$Sex,$Password,$DateOfBirth)
{
	//fName,lName,uName,email,sex,password,date_of_birth
	$query = "update user set fName='$Fname', user_id = '$newid',
				 lName=$Lname,uName=$Uname, email='$Email', sex=$Sex, password='$Password',
				 date_of_birth=$date_of_birth
				 where user_id ='$userId'";
				 
	$result = mysqli_query($conn,$query);
		if ($result) 
		{
			return true;
		}
		else
		{
			return false;	
		}

}
?>