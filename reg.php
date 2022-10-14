<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arch";

$h2=$_POST['name'];
$h3=$_POST['phno'];
$h4=$_POST['email'];  
$h5=$_POST['pass'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO user (uname, phno, email, password)
VALUES ('$h2', '$h3', '$h4','$h5')";

if ($conn->query($sql) === TRUE) {
	echo '<script> alert("Record Inserted") </script>';
	header('location:/arch/signin.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>