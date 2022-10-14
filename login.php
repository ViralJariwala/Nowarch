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
	$pass=mysqli_real_escape_string($con,$_POST['pass']);
	//print_r($_POST)
	echo "<br>";
	$sel2=mysqli_query($con,"select uid from user where email='$email'");
	$row2 = mysqli_fetch_assoc($sel2);
	$uid =$row2['uid'];
	$uname =$row2['uname'];
	$_SESSION['uid']=$uid; 
	$_SESSION['email']=$email; 
	$_session['uname']=$uname;
	
	$res1=mysqli_query($con,"select * from user where email='$email' and password='$pass'");
		while ($row=mysqli_fetch_assoc($res1))
		{
			$row['email'];
			$row['password'];
			
			$uemail = $row['email'];
			$upass = $row['password'];
		
			
		//	print_r($row);			
							
		}

	$res3=mysqli_query($con,"select * from admin where email='$email' and password='$pass'");
		while ($row=mysqli_fetch_assoc($res3))
		{
			$row['email'];
			$row['password'];
			$email = $row['email'];
			$password = $row['password'];
			//echo $email;
			//echo $password;			
							
		}
		
	if($email==$uemail AND $pass==$upass)
	{
 		$sel="select * from user where email='$email' and password='$pass'";
    	$res=mysqli_query($con,$sel);
		$asc=mysqli_fetch_assoc($res);
	   	$result=mysqli_num_rows($res);

		if($result > 0)
		{
			$_SESSION['uname']=$asc['uname'];
			$_SESSION['email']=$email;
			$_SESSION['uid']=$asc['uid'];
			// header("location:/arch/user/demo.php");
			header("location:/arch/user/index.php");
		}
		
		else
		{
			$message="Invalid Details  | Enter valid details";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/signin.php'</script>";
		}
	}
	else
	{
		$a="select * from admin where email='$email' and password='$pass'";
    	$r=mysqli_query($con,$a);
		$ac=mysqli_fetch_assoc($r);
	   	$n=mysqli_num_rows($r);
		if($n > 0)
		{
			$_SESSION['name']=$ac['name'];
			$_SESSION['aid']=$ac['aid'];
			$_SESSION['email']=$email;
			
			// header("location:/arch/user/demo.php");
			header("location:/arch/admin/index.php");
		}
		
		else
		{
			$message="Invalid Details  | Enter valid details";
			echo "<script type='text/javascript'>alert('$message');";
			echo "window.location.href = '/arch/signin.php'</script>";
		}


	}
}

?>
<html>
    <body>
        <h1>Login Page</h1>
    </body>
</html>