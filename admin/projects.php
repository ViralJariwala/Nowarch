<?php

    include('includes/header.php');
    include('includes/navbar.php');
	include('includes/menu.php');
    $connection = mysqli_connect("localhost","root","","arch");
    
	$query = "SELECT * FROM project p";
	$query_run = mysqli_query($connection,$query);


?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Projects List</h1>

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
                      
                        <th>Name</th>
                        <th>Description</th>
                        <th>address</th>
                        <th>price</th>
                        <th>categories</th>
                        
                        <th>image</th>
                        <th>file</th>
                        
                        <th>Edit</th>
                        <th>delete</th>
                  
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    
                        <th>Name</th>
                        <th>Description</th>
                        <th>address</th>
                        <th>price</th>
                        <th>categories</th>
                        <th>image</th>
                        <th>file</th>
                        
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
                        $q = "SELECT * FROM project p, categories c where c.cid=p.cid and p.pid=".$row['pid'];
	                    $qrun = mysqli_query($connection,$q);
                        $r = mysqli_fetch_assoc($qrun)

						?>
                         
							<tr>
					    	
							<td><?php echo $row ['pname'] ?> </td>
    						<td><?php echo $row ['des'] ?> </td>
							<td><?php echo $row ['address'] ?> </td>
                            <td><?php echo $row ['price'] ?> </td>
                            <td><?php echo $r ['cname'] ?> </td>
    						<td><?php echo $row ['img'] ?> </td>
							<td><?php echo $row ['file'] ?> </td>
                            <td>
								<form action="editproject.php" method="POST">
								<input type="hidden" name="edit_id"  name="delete_id" value="<?php echo $row ['pid']?> "> 
								<button  type="submit" name="edit_btn" class="btn btn-success">
								<i class="fa fa-pen"> </i></button>
							    </button>
								</form>
							</td>
											
							<td>
								<form action="deleteproject.php"method="post">
								<input type="hidden" name="delete_id" value="<?php echo $row ['pid']?> ">
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
