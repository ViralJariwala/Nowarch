<?php
session_start();
	
	if(isset($_POST['submit']))
	{
		$connection = mysqli_connect("localhost","root","","arch");
		
	
		
		$cid=$_POST['cid'];
		$name=$_POST['cname'];
		
		
	
	
		
		$query=" UPDATE categories SET  cname='$name'  WHERE cid='$cid' ";
		$query_run =mysqli_query($connection,$query);
		
		if($query_run)
		{
			$message="Your Data Is Updated Successfully..!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/admin/cate.php'</script>";
		}
		else
		{
			$message="Your Data Is Not Updated..!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/admin/cate.php'</script>";
		}	
		
	}
	?>
