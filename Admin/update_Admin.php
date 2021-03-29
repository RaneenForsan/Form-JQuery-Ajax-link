<?php
include('classes/Class_Admin.php');

$x = new Admin();
$x->id = $_GET['id'];


if ($row = $x->UpdateAdminByID()) {
    foreach ($row as $key => $value) {
    }
}

if (isset($_POST['Update'])) {
   $x->email                              = $_POST['Admin_email'];
    $x->password                          = $_POST['Admin_password'];
    $x->admin_name                        = $_POST['Admin_name'];
 
       if ($_FILES['image']['name'] != ""){
        $x->image          = $_FILES['image']['name'];
        $temp_name              = $_FILES['image']['tmp_name'];
        $path                   = "images/";
        move_uploaded_file($temp_name,$path.$x->image); 

    }else{
           foreach ($row as $value) {
                $x->image = $value['image'];
            }
    }
    $x->UpdateAdmin();
    header("location:Add_Admin.php");
}
?>
<?php
include('includes/header.php');?>



				<div class="span9">
					<div class="content">

						<div class="module" style="background:#FFFFFF">
							<div class="module-head" style="background:#FFFFFF">
								<h3 style="color:#671727;font-size:16px;">Update Admin</h3>
							</div>
							<div class="module-body">

									
								

								

									<form class="form-horizontal row-fluid" method="post" action="" enctype="multipart/form-data">
									

										<div class="control-group">
											<label class="control-label" for="basicinput">Admin Email</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type Admin Email" class="span8" name="Admin_email" value="<?php echo $value['email']; ?>">
												
											</div>
										</div>
                                         <div class="control-group">
											<label class="control-label" for="basicinput">Admin Password</label>
											<div class="controls">
												<input type="password" id="basicinput" placeholder="Type Admin password" class="span8" name="Admin_password" value="<?php echo $value['password']; ?>">
												
											</div>
										</div>
								    <div class="control-group">
										  <label for="cc-number" class="control-label mb-1">Admin Image</label>
                                    <br>
                                    <?php echo "<img name='image' src='images/{$value['image']}' width='90px'>" ?>
                                    
                                    <input name="image" type="file"
                                    value="sadasd.jpg" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
											</div>
                                         	<div class="control-group">
											<label class="control-label" for="basicinput">Admin Name</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type Admin name" class="span8" name="Admin_name" value="<?php echo $value['admin_name']; ?>">
												
											</div>
										</div>
										
                                    <br><br><div class="controls">
									<input type="submit" value="Update Admin"class="btn btn-outline-secondary" style="padding:10px 20px;font-size:16px;border:1px solid #2A4AC0;background:#2A4AC0;color:#fff" name="Update">
                                   
									 </div>

									</form>
                
					
							  </div>
                        </div> </div></div>


    <?php 
echo "<center>";
include('includes/footer.php');
echo "</center>";



?>

          <!--<div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Image Student</label>
                                    <br>
                                    <?php /*echo "<img name='fileimage' src='images_website/{$value['image']}' width='90px'>"*/ ?>
                                    
                                    <input name="fileimage" type="file"
                                    value="sadasd.jpg" class="form-control cc-number identified visa">
                                    <span class="help-block" data-valmsg-for="cc-number"
                                        data-valmsg-replace="true"></span>
                                </div>-->