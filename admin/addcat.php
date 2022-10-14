<?php

include('includes/header.php');
include('includes/navbar.php');
include('includes/menu.php');
?>
<html>


<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Categories</h1>

                </div>
		<div class="row">
			
							 <div class="col-lg-6 offset-lg-3" >
								<form name="form" id="form" method="POST"  action="/arch/admin/add_cat.php" enctype="multipart/form-data" onsubmit="return validateform()" >
                          
								<div class="form-group">
									<label for="name">Category Name:</label>
									<input type="text" name="name" id="name"  class="form-control"  />
									<br><span id="msg1"></span>
								</div>
								
								
								
							
								<div class="form-group text-right">
									<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-block">
								</div>
								
										
							</form>
						</div>
						</div>
					
		</section>
</div>	
<?php
include('includes/footer.php');
include('includes/scripts.php');

?>

