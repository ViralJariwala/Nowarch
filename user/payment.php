<?php
    
   
    include('includes/dbcon.php');
    session_start();

	$pid=$_SESSION['pid'];
	echo '<script type="text/javascript">alert("Payment Done");</script>';?>
    <a href="/../arch/user/download.php?pid=<?=$pid;?>"> Click Here To Download File </a>


   