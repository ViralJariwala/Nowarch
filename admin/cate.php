<?php

    include('includes/header.php');
    include('includes/navbar.php');
	include('includes/menu.php');
    $connection = mysqli_connect("localhost","root","","arch");
    
	$query = "SELECT * FROM categories c";
	$query_run = mysqli_query($connection,$query);


?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Categories List</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Projects</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      
                    <th>id</th>
                        <th>Name</th>
                        
                        <th>Edit</th>
                        <th>delete</th>
                  
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                         <th>id</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>delete</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
				if(mysqli_num_rows($query_run)>0)
				{
					while($row = mysqli_fetch_assoc($query_run))
					{
                        $q = "SELECT * FROM  categories c ";
	                    $qrun = mysqli_query($connection,$q);
                        $r = mysqli_fetch_assoc($qrun)

						?>
                         
							<tr>
					    	
							<td><?php echo $row ['cid'] ?> </td>
    						<td><?php echo $row ['cname'] ?> </td>
							
                            <td>
								<form action="editcate.php" method="POST">
								<input type="hidden" name="edit_id"  name="delete_id" value="<?php echo $row ['cid']?> "> 
								<button  type="submit" name="edit_btn" class="btn btn-success">
								<i class="fa fa-pen"> </i></button>
							    </button>
								</form>
							</td>
											
							<td>
								<form action="deletecate.php"method="post">
								<input type="hidden" name="delete_id" value="<?php echo $row ['cid']?> ">
								<button type="submit" name="delete_btn" class="btn btn-danger"> 
								<i class="far fa-trash-alt"> </i></button>
								</form>
							</td>
                            </tr>
                        <?php

                    }
                }
                ?>
		
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');   
?>   
