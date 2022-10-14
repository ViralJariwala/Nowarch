<?php 
//session_start();

$con=mysqli_connect("localhost","root","");
if($con)
{
    mysqli_select_db($con,"arch");
}
else
{
    echo "not connect to the database";
}
?>

