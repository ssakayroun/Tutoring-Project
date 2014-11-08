<?php

// We take care of the connection to the database here
$servername="localhost";
$user="root";
$pwd="";
$base="tutoring_project";
$link = mysqli_connect($servername, $user,$pwd, $base);
if (mysqli_connect_errno())//we check for errors in the database 
	{
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}


?>