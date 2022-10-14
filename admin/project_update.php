<?php
session_start();
	
	if(isset($_POST['submit']))
	{
		$connection = mysqli_connect("localhost","root","","arch");
		
	
		$image = $_FILES['image']['name'];
        $file = $_FILES['file']['name'];
		$pid=$_POST['pid'];
		$pname=$_POST['pname'];
		$des=$_POST['des'];
		$addr=$_POST['address'];
        $price=$_POST['price'];
		$cid=$_POST['cid'];
		
	
	
		
		$query=" UPDATE project SET  pname='$pname', des='$des', address='$addr', price='$price', img='$image', file='$file'  WHERE pid='$pid' ";
		$query_run =mysqli_query($connection,$query);
		
		if($query_run)
		{
			$message="Your Data Is Updated Successfully..!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/admin/projects.php'</script>";
		}
		else
		{
			$message="Your Data Is Not Updated..!";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/admin/projects.php'</script>";
		}	
		if(move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/../user/img/uploaded_images/'. $_FILES["image"]['name']))
		{
			echo "Image uploaded successfully";
		}
		else
		{
			echo "Failed to upload image";
		}	

		if(move_uploaded_file($_FILES['file']['tmp_name'], __DIR__.'/../user/img/uploaded_zip/'. $_FILES["file"]['name']))
		{
			echo "File uploaded successfully";
		}
		else
		{
			echo "Failed to upload File";
		}	
			
	}
	?>
