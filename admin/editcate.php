<?php

include('includes/header.php');
include('includes/navbar.php');
include('includes/menu.php');
if(isset($_POST['edit_btn']))
    {
        $id=$_POST['edit_id'];

            // $pid=$_REQUEST['pid'];
        $connection = mysqli_connect("localhost","root","","arch");									
		$query = "SELECT * FROM categories where cid= '$id' ";
		 $query_run = mysqli_query($connection,$query);

?>

	
		
           

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Update Categories</h1>

                </div>
		<div class="row">
			
							 <div class="col-lg-6 offset-lg-3" >
								<form name="form"  method="POST"  action="/arch/admin/cate_update.php" enctype="multipart/form-data" >
                                <?php
	                                if(mysqli_num_rows($query_run)>0)
										{
									
									        while($row = mysqli_fetch_assoc($query_run))
												{
													?>
									<input type="hidden" name="cid" value="<?php echo $row['cid']?>" class="form-control"  />
								<div class="form-group">
									<label for="cname">Name:</label>
									<input type="text" name="cname" value="<?php echo $row['cname']?>" class="form-control"  />
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
<?php }
include('includes/footer.php');
include('includes/scripts.php');

?>

