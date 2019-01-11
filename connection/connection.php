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
}    
?>