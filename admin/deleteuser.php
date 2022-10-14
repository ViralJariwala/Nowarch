<?php
session_start();
	if(isset($_POST['delete_btn']))
	{
		$id=$_POST['delete_id'];
		$connection = mysqli_connect("localhost","root","","arch");
		
		$query=" DELETE FROM user WHERE uid='$id' ";
		
		$query_run =mysqli_query($connection,$query,$query1);
		
		if($query_run)
		{
			$_SESSION['success']= "Your Data Is Deleted";
			header('location: user.php');
		}
		else
		{
			$_SESSION['status']= "Your Data Is Not Deleted";
			header('location: user.php');
		}
	}
	
	?>