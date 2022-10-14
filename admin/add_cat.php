<?php
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

	$h1=$_POST['name'];
	
	

	//$target = "/user/img/uploaded_images/".basename($images);
    //$target2 = "file/".basename($file);
	
	$in="INSERT INTO `categories`(`cname`) VALUES ('$h1')";
	if(mysqli_query($conn,$in))
	{
		header('location:../admin/index.php');
		echo"Record inserted successfully";
		}
	else
	{
		echo"fail to insert record";
	}
	

} 

?>