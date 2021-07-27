<?php
	$conn = new PDO('mysql:host=localhost;dbname=office', 'root', '');
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>