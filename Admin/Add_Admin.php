<?php
include('classes/Class_Admin.php');
$x=new Admin();
if (isset($_POST['Add'])) {
    
    $x->email                           = $_POST['Admin_email'];
    $x->password                        = $_POST['Admin_password'];
    $x->image                           = $_FILES['image']['name'];
    $temp_name                          = $_FILES['image']['tmp_name'];
    $path                               = "images/";
    move_uploaded_file($temp_name,$path.$x->image);
    $x->admin_name                      = $_POST['Admin_name'];
    $x->CreateAdmin();
    echo '<meta http-equiv="refresh" content="0">';
}
?>


<?php 
include("includes/header.php");
 ?>

<div class="span9">
<div class="content">
<div class="module" style="background:#FFFFFF" id="ll">
<div class="module-head" style="background:#FFFFFF" id="k">
<h3 style="color:#001727;font-size:16px;" id="nnn">Add Admin</h3>
</div><hr>
<div class="module-body" >

									
									
								

								

<form class="form-horizontal row-fluid" method="post" action="" enctype="multipart/form-data">
<div class="control-group">
<label class="control-label" for="basicinput" >Admin Name</label>
<div class="controls">
<input type="text" id="basicinput" placeholder="Admin Name" class="span8" name="Admin_name">
												
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput" >Admin email </label>
<div class="controls">
<input type="email" id="basicinput" placeholder="Admin email" class="span8" name="Admin_email" class="ccc">
												
</div>
</div>

                                        
<div class="control-group">
<label class="control-label" for="basicinput" >Admin Name</label>
<div class="controls">
<input type="text" id="basicinput" placeholder="Admin password" class="span8" name="Admin_password">
												
</div>
</div>
                                        
 <div class="control-group">
<label class="control-label" for="basicinput">Admin Image</label>
<div class="controls">
<input name="image" type="file" value="sadasd.jpg" class="form-control cc-number identified visa" id="basicinput">
												
</div>
</div>
<br><br><div class="controls">
<input type="submit" value="Add Admin"class=" btn btn-outline-secondary" style="padding:10px 20px;font-size:14px;border:1px solid #4E9CB2;background:#2A4AC0;color:#fff" name="Add">
									
                                   
 </div>

</form>
                
					
</div>
</div> 
                        
                        		
<div class="module">
<div class="module-head" style="background:#FFFFFF" id="oo">
								<h3 style="color:#171727;font-size:16px;" id="fon">Added Admin</h3>
							</div>
    <div class="module-body" style="background:#ffffff">
						
<table class="table">
  <thead>
<tr>
 <th>ID</th>
 <th>Email</th>
 <th>Name</th>
 <th>Image</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
									
 <?php 
$count = 1;
if ($data =$x->ReadAdmin()) {
foreach ($data as $key => $value) {
    $id        =    $value['id'];
    $email     = $value['email'];
    $password  =  $value['password'];
    $image     =  $value['image'];

  ?>
    <tr>
     <td align='center'><?= $count; ?></td>
     <td align='center'><?= $email; ?></td>
     <td align='center'><?= $password; ?></td>
     <td><img src="images/<?=$image?>"></td>
     <td>
       <span class='delete btn btn-primary' data-id='<?= $id;?>'>Delete</span>
     </td>
    </tr>
  <?php
   $count++;
  }}
 ?>
                                      
                                   <!--Script-->   
     <script>
$(document).ready(function(){
 // Delete 
 $('.delete').click(function(){
   var el = this;
  
   // Delete id
   var deleteid = $(this).data('id');
 
   var confirmalert = confirm("Are you sure?");
   if (confirmalert == true) {
      // AJAX Request
      $.ajax({
        url: 'delete_Admin.php',
        type: 'POST',
        data: { id:deleteid },
        success: function(response){

          if(response == 1){
	    // Remove row from HTML Table
	    $(el).closest('tr').css('background','tomato');
	    $(el).closest('tr').fadeOut(800,function(){
	       $(this).remove();
	    });
          }else{
	    alert('Invalid ID.');
          }

        }
      });
   }

 });

});
        </script>
                                      
								  </tbody>
								</table>
                                    </div>
                                </div>
								</div>
								<br />
								<br />

                               </div>
                         


<?php 
echo "<center>";
include("includes/footer.php");
echo "</center>";

 ?>

