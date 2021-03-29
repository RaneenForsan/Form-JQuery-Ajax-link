	<?php include("includes/header.php");?>


<style>
    
@media only screen and (max-width: 700px) {
  #table{
    zoom:48%;
      font-size:17px;
    }
}
@media only screen and (max-width: 280px) {
  #table{
    zoom:27%;
    }
}
 @media screen and (min-width: 500px) {
  #table {
    zoom:84%;
          font-size:16px;

  }
@media all and (max-width: 540px) and (min-width: 500px) {
  #table {
    zoom:55%;

  }
}

</style>


<?php include('classes/Class_vendor.php');
       
?>
<?php
$x=new vendor();

?>


                   <div class="span9">
					<div class="content">
                        <div class="module" class="col-6">
							<div class="module-head" style="background:#FFFFFF">
								<h3 style="font-size:16px;color:#67172">Posts</h3>
							</div>
							<div class="module-body" style="background:#FFFFFF">
								
								<table class="table" id="table">
								  <thead>
									<tr>
									  <th>Title</th>
									  <th>Descr</th>
									  <th>Vendor phone</th>
									  <th>Image</th>
									  <th>name</th>
									  <th>Accept</th>
									  <th>Reject</th>
									</tr>
								  </thead>
								  <tbody>
									<?php
                                 if($data = $x->Read_post()){
                                foreach ($data as $key => $value) {
										echo "<tr>";
                                        echo "<td>{$value['post_title']}</td>";
                                        echo "<td>{$value['post_desc']}</td>";
                                        echo "<td>{$value['vendor_phone']}</td>";
                                        echo "<td><img src='../Vendor/images/{$value['images']}' width='200' height='100'></td>";
                                     echo "<td>{$value['vendor_name']}</td>";
                                    
                                       echo "<td><a href='Add_post.php?id={$value['post_id']}'
                                        class='btn btn-primary'>Accept</a></td>"; 
                                
                                     echo "<td><a href='Reject_post.php?id={$value['post_id']}'
                                        class='btn btn-danger'>Reject</a></td>"; 
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





<!-- Button trigger modal -->


<!-- Modal -->

