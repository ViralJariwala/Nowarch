<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/menu.php');
if(isset($_POST['edit_btn']))
    {
        $id=$_POST['edit_id'];

            // $pid=$_REQUEST['pid'];
        $connection = mysqli_connect("localhost","root","","arch");									
		$query = "SELECT * FROM project where pid= '$id' ";
		 $query_run = mysqli_query($connection,$query);

?>

	
		
           

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Update User Information</h1>

                </div>
		<div class="row">
			
							 <div class="col-lg-6 offset-lg-3" >
								<form name="form"  method="POST"  action="/arch/admin/project_update.php" enctype="multipart/form-data" >
                                <?php
	                                if(mysqli_num_rows($query_run)>0)
										{
									
									        while($row = mysqli_fetch_assoc($query_run))
												{
													?>
									<input type="hidden" name="pid" value="<?php echo $row['pid']?>" class="form-control"  />
								<div class="form-group">
									<label for="cname">Name:</label>
									<input type="text" name="pname" value="<?php echo $row['pname']?>" class="form-control"  />
								</div>
								<div class="form-group">
									<label for="cname">des:</label>
									<input type="text" name="des"  value="<?php echo $row['des']?>" class="form-control"  />
								</div>
								
								<div class="form-group">
									<label for="cno">Adderss:</label>
									<input type="text" name="address"  value="<?php echo $row['address']?>" class="form-control"  />
								</div>

                                <div class="form-group">
									<label for="cno">price:</label>
									<input type="text" name="price"  value="<?php echo $row['price']?>" class="form-control"  />
								</div>
                                <div class="form-group">
									<label for="cno">image:</label>
									<input type="file" name="image"  value="<?php echo $row['img']?>" class="form-control"  />
								</div>
                                <div class="form-group">
									<label for="cno">file:</label>
									<input type="file" name="file"  value="<?php echo $row['file']?>" class="form-control"  />
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

