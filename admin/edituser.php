<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/menu.php');
        $uid=$_REQUEST['uid'];
        $connection = mysqli_connect("localhost","root","","arch");									
		$query = "SELECT * FROM user where uid= '$uid' ";
		$query_run = mysqli_query($connection,$query);

?>

	
		
           

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Update User Information</h1>

                </div>
		<div class="row">
			
							 <div class="col-lg-6 offset-lg-3" >
								<form name="form"  method="POST"  action="/arch/admin/user_update.php" enctype="multipart/form-data" >
                                <?php
	                                if(mysqli_num_rows($query_run)>0)
										{
									
									        while($row = mysqli_fetch_assoc($query_run))
												{
													?>
									<input type="hidden" name="uid" value="<?php echo $row['uid']?>" class="form-control"  />
								<div class="form-group">
									<label for="cname">Name:</label>
									<input type="text" name="uname" value="<?php echo $row['uname']?>" class="form-control"  />
								</div>
								<div class="form-group">
									<label for="cname">Phone No:</label>
									<input type="text" name="phno"  value="<?php echo $row['phno']?>" class="form-control"  />
								</div>
								
								<div class="form-group">
									<label for="cno">Email:</label>
									<input type="text" name="email"  value="<?php echo $row['email']?>" class="form-control"  />
								</div>
								
								
								
								
                                
								<div class="form-group text-right">
									<input type="submit" name="submit" id="submit" value="Update" class="btn btn-primary btn-block">
								</div>
								<?php
												}
											}
										
								?>
															
							</form>
						</div>
						</div>
					
		</section>
</div>	
<?php
include('includes/footer.php');
include('includes/scripts.php');

?>

