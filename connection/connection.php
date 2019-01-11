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
	function addUser($fname,$lname,$uname,$email,$password,$dob,$gender){
		$db = new DB();
		$con =$db->connect();
		$sql="call insertNewUser('".$fname."','".$lname."','".$uname."','".$email."','".$gender."','".$password."','".$dob."')";
		if (mysqli_query($con, $sql)) {
			$_POST['success-message']='You are registered successfully. Please Sign in with your credentials';
			require 'views/login.php';
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		$db->disconnect($con);
	}
}    
?>