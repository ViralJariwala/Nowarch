<?php
	$con=mysqli_connect("localhost","root","","arch");
	session_start();

	session_destroy();
	header("location:/arch/index.php"); 
?>
