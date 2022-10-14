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
	$images = $_FILES['image']['name'];
    $file = $_FILES['file']['name'];
	$h1=$_POST['name'];
	$h2=$_POST['des'];
	$h3=$_POST['addr'];
	$h4=$_POST['price'];  
    $h5=$_POST['categories']; 
	

	//$target = "/user/img/uploaded_images/".basename($images);
    //$target2 = "file/".basename($file);
	
	$in="INSERT INTO `project`(`pname`, `des`, `address` , `img` , `price` , `cid` , `file`) VALUES ('$h1','$h2','$h3','$images','$h4','$h5','$file')";
	if(mysqli_query($conn,$in))
	{
		header('location:../admin/index.php');
		echo"Record inserted successfully";
		}
	else
	{
		echo"fail to insert record";
	}
	//if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
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