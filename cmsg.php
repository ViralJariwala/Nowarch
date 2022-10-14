<?php
session_start();
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
	echo"server not connected";
}
else
{
	echo"server connected";			// connection is established
}
if(!(mysqli_select_db($conn,"arch")))
{
	echo"no database selected";
}
else
{
	echo"database selected";
}
if(isset($_POST['submit']))
{	
	

	$h3=$_POST['name'];
	$h4=$_POST['email`'];
	$h6=$_POST['subject'];
	$h5=$_POST['msg'];
	
	echo "$h2";
	
?>

<?php

	$in="INSERT INTO `msg`(`name`, `email`, `msg`, `subject`) VALUES ('$h3','$h4','$h5','$h6')";
	if(mysqli_query($conn,$in))
	{

		$message="message send successfully!";
		
		echo "<script type='text/javascript'>alert('$message');";
		echo "window.location.href = '/final_OCR/student/index.php'</script>";
		
		}
	else
	{
		echo"fail to post job";
	}
	

} 


?>