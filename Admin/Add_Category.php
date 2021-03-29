

<?php
include('classes/Class_category.php');
$x=new category();
if (isset($_POST['Add'])) {
    $x->category_name                   = $_POST['category_name'];
    $x->category_description           = $_POST['category_description'];
    $x->image                           = $_FILES['image']['name'];
    $temp_name                          = $_FILES['image']['tmp_name'];
    $path                               = "images/";
    move_uploaded_file($temp_name,$path.$x->image);
    $x->CreateCategory();
    echo '<meta http-equiv="refresh" content="0">';
}
?>


<?php 
include("includes/header.php");
 ?>
            <style>
@media only screen and (max-width: 500px) {
  .table {
overflow-y: scroll;
  }
    body{
        overflow-y: scroll;

    }
}

</style>    
 

<body>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head" style="background:#FFFFFF">
								<h3 style="color:#671727;font-size:16px;">Add Category</h3>
							</div>
							<div class="module-body" style="background:#FFFFFF">

									
									
								

								

									<form class="form-horizontal row-fluid" method="post" action="" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput" >Category Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type category name" class="span8" name="category_name">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Category Description</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type category Description" class="span8" name="category_description">
												
											</div>
										</div>

								    <div class="control-group">
											<label class="control-label" for="basicinput">Category Image</label>
											<div class="controls">
				                  <input name="image" type="file"
                                    value="sadasd.jpg" class="form-control cc-number identified visa">
												
											</div>
										</div>
                                    <br><br><div class="controls">
									<input type="submit" value="Add Category"class="btn btn-outline-secondary" style="padding:10px 20px;font-size:14px;border:1px solid #4E9CB2;background:#2A4AC0;color:#fff"name="Add">
                                   
									 </div>

									</form>
                
					
							  </div>
                              </div> 
                        
                        
                        <div class="module" class="table">
							<div class="module-head" style="background:#FFFFFF">
								<h3 style="font-size:16px;color:#671727">Added Category</h3>
							</div>
							<div class="module-body" style="background:#FFFFFF">
								
								<table class="table">
								  <thead>
									<tr>
                                    <div class="container">
                                        <div class="row">
                                    <div class="col-sm-2">
									  <th>Name</th>
                                        </div>
                                    <div class="col-sm-2">

									  <th>Description</th>
                                            </div>
                                     <div class="col-sm-2">

									  <th>Image</th>
                                            </div>
                                    <div class="col-sm-2">
									  <th>Update</th>
                                        </div>
                                <div class="col-sm-2">
									  <th>Delete</th>
                                            </div>
                                    </div>
                                     </div>
									</tr>
								  </thead>
								  <tbody>
									<?php
                                if ($data = $x->ReadCategory()) {
                                    foreach ($data as $key => $value) {
                                        echo "
                                        <tr>
                                     <div class=''container'>
                                    <div class='row'>
                                    <div class='col-sm-2'>
                                        <td>
                                            {$value['category_name']}
                                        </td>
                                        </div>
                                     <div class='col-sm-2'>

                                        <td>
                                            {$value['category_description']}
                                        </td>
                                        </div>
                                     <div class='col-sm-2'>
                                        <td>
                                            <img src='images/{$value['category_image']}' style='width:200px;height:150px'>
                                        </td>
                                        </div>
                                        <div class='col-sm-2'>
                                        <td><a href='update_category.php?id={$value['category_id']}' class='btn btn-primary'>Update</a></td>
                                        </div>
                                        <div class='col-sm-2'>
                                        <td><a href='delete_category.php?id={$value['category_id']}' class='btn btn-danger'>Delete</a></td></div>
                                        </div>
                                        </div>
                                        </tr>
                                        ";
                                    }
                                }
                            
                             
                          ?>
								  </tbody>
								</table>

								
								<br />
								<br />

                               </div>
                                </div>
                    </div>
</div>
	
<?php 
echo "<center>";
include("includes/footer.php");
echo "</center>";

 ?>
    </body>