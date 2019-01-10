<?php
define('SERVER','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','iNGagedb');
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