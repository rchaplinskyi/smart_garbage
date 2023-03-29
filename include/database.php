<?php
	$servername = 'localhost';
	$username = 'root';
	$pass = '';
	$dbname = 'garbagedb';


	$conn = mysqli_connect($servername, $username, $pass, $dbname);
		if (mysqli_connect_errno()){
			die('Can not connected for database: ('.mysqli_connect_errno().'): '.mysqli_connect_error());
			exit();
		}
?>
