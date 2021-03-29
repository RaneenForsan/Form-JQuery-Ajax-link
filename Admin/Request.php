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
								<h3 style="font-size:16px;color:#67172">Vendor Requests</h3>
							</div>
							<div class="module-body" style="background:#FFFFFF">
								
								<table class="table" id="table">
								  <thead>
									<tr>
									  <th>Name</th>
									  <th>Email</th>
									  <th>Mobile</th>
									  <th>Image</th>
									  <th>Accept</th>
									  <th>Details</th>
									  <th>Reject</th>
									</tr>
								  </thead>
								  <tbody>
									<?php
                                 if($data = $x->Read_Request_Vendor()){
                                foreach ($data as $key => $value) {
										echo "<tr>";
                                        echo "<td>{$value['vendor_name']}</td>";
                                        echo "<td>{$value['vendor_email']}</td>";
                                        echo "<td>{$value['vendor_mobile']}</td>";
                                        echo "<td><img src='../Vendor/Login/images/{$value['image']}' width='200' height='100'></td>";
                                       echo "<td><a href='Add_Vendor.php?id={$value['vendor_id']}'
                                        class='btn btn-primary'>Accept</a></td>"; 
                                    
                                           echo "<td><a href='UserDetails.php?id={$value['vendor_id']}'
                                        class='btn btn-primary'>Details</a></td>"; 
                                     echo "<td><a href='Reject_Vendor.php?id={$value['vendor_id']}'
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

