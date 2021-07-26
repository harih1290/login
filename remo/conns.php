<?php
	$conn =new mysqli("localhost","database","userid","password");
	if(!$conn){
		die("error" .mysqli_connect_error());
	}
	
	
?>
