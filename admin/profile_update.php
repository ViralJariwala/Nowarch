<?php
	if(isset($_POST['submit']))
	{
		$connection = mysqli_connect("localhost","root","","arch");
		
	
		
		$id=$_POST['aid'];
		$name=$_POST['name'];
		$email=$_POST['email'];
	
		
		$query=" UPDATE admin SET  name='$name',email='$email'  WHERE aid='$id' ";
		$query_run =mysqli_query($connection,$query);
		
		if($query_run)
		{
			$message="Your Data Is Updated Successfully..!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/admin/profile.php?id=1'</script>";
		}
		else
		{
			$message="Your Data Is Not Updated..!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/admin/profile.php?id=1'</script>";
		}	
		
	}
	?>
