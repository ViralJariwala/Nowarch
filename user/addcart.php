<?php 
    include('includes/dbcon.php');
    session_start();
    
    if(isset($_SESSION['email']))
    {
        $email=$_SESSION['email'];
    	$u="select * from user where email='$email'";
        $val=mysqli_query($con,$u);

 	    $row=mysqli_fetch_assoc($val);
		   
		$uid=$row['uid'];
		
		 if(isset($_REQUEST['pid']))
			{
				$pid=$_REQUEST['pid'];
				
	 
                //$sql=mysqli_query($con,"insert into cart (pid,uid) values($pid,$uid)");
                $sql = "INSERT INTO cart(pid,uid) VALUES ('$pid','$uid')";
                $c=mysqli_query($con,$sql);

                header('location:projects.php');
			}
	    }
    else
    { ?>
	<script>
	    alert('login first');
	</script>
    <?php 
        } 
    ?>