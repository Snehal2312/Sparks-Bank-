<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sparks";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn){
		die("Could not connect to the database ".mysqli_connect_error());
	}

?>