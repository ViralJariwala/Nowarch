<?php
session_start();
	
	if(isset($_POST['submit']))
	{
		$connection = mysqli_connect("localhost","root","","arch");
		
	
		
		$uid=$_POST['uid'];
		$name=$_POST['uname'];
		$phno=$_POST['phno'];
		$email=$_POST['email'];
	
		
		$query=" UPDATE user SET  uname='$name', phno='$phno', email='$email'  WHERE uid='$uid' ";
		$query_run =mysqli_query($connection,$query);
		
		if($query_run)
		{
			$message="Your Data Is Updated Successfully..!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/admin/user.php'</script>";
		}
		else
		{
			$message="Your Data Is Not Updated..!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/admin/user.php'</script>";
		}	
		
	}
	?>
