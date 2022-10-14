<?php 
session_start();

$con=mysqli_connect("localhost","root","");
if(!$con)
{
		echo "Not connected to server";
}

if(!mysqli_select_db($con,"arch"))
{
		echo "Not connected to database"; 
}

if (isset($_POST['login']))
{	
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$pass=mysqli_real_escape_string($con,$_POST['password']);
	
	

	$res3=mysqli_query($con,"SELECT * FROM admin WHERE email='$email'");
		while ($row=mysqli_fetch_assoc($res3))
		{
			$row['email'];
			$row['password'];
			$email = $row['email'];
			$password = $row['password'];
			echo $email;
			echo $password;			
			echo "<br>";				
		}
		
	if($email==$email AND $pass==$pass)
	{
		$a="select * from admin where email='$email' and password='$pass'";
    	$r=mysqli_query($con,$a);
		$ac=mysqli_fetch_assoc($r);
	   	$n=mysqli_num_rows($r);
		if($n > 0)
		{
			$_SESSION['name']=$ac['name'];
			$_SESSION['email']=$email;

			
			// header("location:/arch/user/demo.php");
			header("location:/arch/admin/index.php");
		}
		
		else
		{
			$message="Invalid Details  | Enter valid details";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/admin/login.html'</script>";
		}
	}
	
}
?>