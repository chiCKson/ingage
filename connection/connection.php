<?php
define('SERVER','localhost:3306');
define('USER','user');
define('PASSWORD','123');
define('DATABASE','ingagedb');
class DB{
	function connect(){
		$conn = mysqli_connect(SERVER, USER, PASSWORD,DATABASE);
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		return $conn;
	}	
	function disconnect($conn){
		mysqli_close($conn);
	}
	function addUser($conn,$fname,$lname,$uname,$email,$password,$dob,$gender){
		
		$sql="call insertNewUser('".$fname."','".$lname."','".$uname."','".$email."','".$gender."','".$password."','".$dob."')";
		if (mysqli_query($conn, $sql)) {
			$_POST['success-message']='You are registered successfully. Please Sign in with your credentials';
			require 'views/login.php';
		} else {
			$_POST['alert-message']='Error in database '.mysqli_error($conn);
			require 'views/login.php';
		}
	}
	function getOnlyOneColumnFromTable($conn,$where,$equal,$column,$table){
		$sql="select ".$column." from ".$table." where ".$where."='".$equal."'";
		$result = mysqli_query($conn, $sql);
		$row =mysqli_fetch_assoc($result);
		return $row;
	}
	function updateGivenTableColumnOnly($conn,$table,$column,$value,$where,$equal){
		$sql = "update ".$table." set ".$column." = '".$value."' where ".$where." ='".$equal."'";
		if (mysqli_query($conn, $sql)) {
			//nothing
		} else {
			$_POST['alert-message']='Error in database '.mysqli_error($conn);
			require 'views/login.php';
		}
	}
}    
?>