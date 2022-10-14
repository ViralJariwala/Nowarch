<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/menu.php');
?>
<html>
	<head>
		
       
		  <script>
function validateform()
{    
	var pname = document.forms["form"]["name"].value; //<----- empty field validation------>
	if(pname=="")
		{
			document.getElementById("msg1").innerHTML = "*Please enter your project name";
			document.form.name.focus();
			return false;
		}
	if(!/^[a-zA-Z]*$/g.test(pname)) //<----- only alphabets ------>
		{
			document.getElementById("msg1").innerHTML = "*Please enter valid characters"; 
			document.form.name.focus();
			return false;
		}
	else
		{
			document.getElementById("msg1").innerHTML = "";
		}
		
		var des = document.forms["form"]["des"].value;  //<----- empty field validation------>
	if(des!="")
	{
	if(des.length<15)                              //<----- enter at least 10 characters----->
		{
			document.getElementById("msg3").innerHTML = "*Description must contain at least 15 characters";
			document.form.des.focus();
			return false;
		}
	else
		{
			document.getElementById("msg3").innerHTML = "";
		}
	}
	else if(des=="")
		{
			document.getElementById("msg3").innerHTML = "*Please enter description";
			document.form.desc.focus();
			return false;
		}	
	else
		{
			document.getElementById("msg3").innerHTML = "";
		}
		
	var address = document.forms["form"]["address"].value;  //<----- empty field validation------>
	if(address!="")
	{
	if(address.length<5)                              //<-----enter at least 5 characters ----->
		{
			document.getElementById("msg2").innerHTML = "*Address must contain at least 10 characters";
			document.form.address.focus();
			return false;
		}
	else
		{
			document.getElementById("msg2").innerHTML = "";
		}
	}
	else if(address=="")
		{
			document.getElementById("msg2").innerHTML = "*Please enter address";
			document.form.address.focus();
			return false;
		}	
	else
		{
			document.getElementById("msg2").innerHTML = "";
		}


	var p = document.forms["form"]["price"].value;
	if(p=="")
		{
			document.getElementById("msg4").innerHTML = "*Please enter Price";
			document.form.price.focus();
			return false;
		}
	else
		{
			document.getElementById("msg4").innerHTML = "";
		}
	
	
	
	if(isNaN(p))
		{
			document.getElementById("msg4").innerHTML = "*Price must contain only numeric values";
			document.form.price.focus();
			return false;
		}
	else
		{
			document.getElementById("msg4").innerHTML = "";
		}
		
	
}		
		  </script>
	</head>

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Project</h1>

                </div>
		<div class="row">
			
							 <div class="col-lg-6 offset-lg-3" >
								<form name="form" id="form" method="POST"  action="/arch/admin/add_project.php" enctype="multipart/form-data" onsubmit="return validateform()" >
                          
								<div class="form-group">
									<label for="name">Project Name:</label>
									<input type="text" name="name" id="name"  class="form-control"  />
									<br><span id="msg1"></span>
								</div>
								<div class="form-group">
									<label for="des">Project Description:</label>
									<input type="text" name="des" id="des"   class="form-control"  />
									<br><span id="msg3"></span>
								</div>
								
								<div class="form-group">
									<label for="addr">Address:</label>
									<input type="text" name="addr" id="addr"  class="form-control"  />
									<br><span id="msg2"></span>

								</div>
							
								<div class="form-group">
									<label for="price">Price:</label>
									<input type="text" name="price" id="price" class="form-control"  />
									<br><span id="msg4"></span>
								</div>
								
								<div class="form-group">
									<label for="price">Categories:</label>
									<select name="categories" id="categories" class="form-control" >
									<option value="0">Select Category</option>
									<option value="1">Interior</option>
									<option value="2">Exterior</option>
									<option value="3">Architecture</option>
									
									</select>
								</div>

								<div class="form-group">
									<label for="image">Image:</label>
									<input type="file" accept=".jpg" name="image"  class="form-control"  />
								</div>

								<div class="form-group">
									<label for="file">File:</label>
									<input type="file" accept=".zip, .rar" name="file"  class="form-control"  />
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

