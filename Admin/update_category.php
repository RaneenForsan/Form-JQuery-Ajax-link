<?php
include('classes/Class_category.php');

$x = new category();
$x->id = $_GET['id'];


if ($row = $x->UpdateCategoryByID()) {
    foreach ($row as $key => $value) {
    }
}

if (isset($_POST['Update'])) {
    $x->category_name                  = $_POST['category_name'];
    $x->category_description           = $_POST['category_description'];
   

       if ($_FILES['image']['name'] != ""){
        $x->image          = $_FILES['image']['name'];
        $temp_name              = $_FILES['image']['tmp_name'];
        $path                   = "images/";
        move_uploaded_file($temp_name,$path.$x->image);      
    }else{
           foreach ($row as $value) {
                $x->image = $value['category_image'];
            }
    }
    $x->UpdateCategory();
    header("location:Add_Category.php");
}
?>
<?php
include('includes/header.php');?>



				<div class="span9">
					<div class="content">

						<div class="module" style="background:#FFFFFF">
							<div class="module-head" style="background:#FFFFFF">
								<h3 style="font-size:16px;color:#fff">Update Category</h3>
							</div>
							<div class="module-body">

									
									
								

								

									<form class="form-horizontal row-fluid" method="post" action="" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput">Category Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type category name" class="span8" name="category_name" value="<?php echo $value['category_name']; ?>">
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Category Description</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type category Description" class="span8" name="category_description" value="<?php echo $value['category_description']; ?>" >
												
											</div>
										</div>

								    <div class="control-group">
										  <label for="cc-number" class="control-label mb-1">Image Student</label>
                                    <br>
                                    <?php echo "<img name='image' src='images/{$value['category_image']}' width='90px'>" ?>
                                    
                                    <input name="image" type="file"
                                    value="sadasd.jpg" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
											</div>
										
                                    <br><br><div class="controls">
									<input type="submit" value="Update Category"class="btn btn-outline-secondary" style="padding:10px 20px;font-size:16px;border:1px solid #007BFF;background:#2A4AC0;color:#fff" name="Update">
                                   
									 </div>

									</form>
                
					
							  </div>
                        </div> </div></div>


    <?php 
echo "<center>";
include('includes/footer.php');
echo "</center>";



?>

      