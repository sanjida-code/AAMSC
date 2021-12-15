<?php
	$conn = mysqli_connect('localhost', 'root', '', 'aamsc');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>