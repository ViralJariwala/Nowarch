<?php session_start();
     include('includes/dbcon.php');
    if(isset($_REQUEST['pid']))
	{
        $id=$_REQUEST['pid'];
		$uid=$_SESSION['uid'];
		$query=" DELETE FROM cart WHERE pid='$id' and uid=$uid ";
		$query_run =mysqli_query($con,$query);
		
		 header('location:viewcart.php');
	}

		
		
?>
		 
		