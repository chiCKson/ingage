<?php
define('SERVER','localhost:3306');
define('USER','user');
define('PASSWORD','123');
define('DATABASE','twistnturns');
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
	
	function set_data($conn,$sql){
		if (mysqli_query($conn, $sql)) {
			//nothing
		} else {
			echo "error".mysqli_error($conn);
		}
	}
	function get_data($conn,$sql){
		$result = mysqli_query($conn, $sql);
		return $result;
	}
}    
?>