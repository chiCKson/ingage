<?php
// Check
//
function DeleteUser($conn,$userId){
		$query="delete from user where id='$userId'";
		//$message="";
		
		$result=mysqli_query($conn,$query);
			if($result){
				//$message="Deleted!";
				return true;
			}
			else{
				
				//$message="Error";
				return false;
			}
			return $message;
	}
?>