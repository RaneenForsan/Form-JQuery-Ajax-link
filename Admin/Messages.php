<style>


</style>


<?php include('classes/Class_vendor.php');
       
?>
<?php
$x=new vendor();

?>

	<?php include("includes/header.php");?>

<div class="span9">
					<div class="content">
                        <div class="module" style="background:#FFFFFF">
							<div class="module-head" style="background:#FFFFFF">
								<h3 style="color:#273434;font-size:16px;">Messages</h3>
							</div>
							<div class="module-body">
								
								<table class="table">
								  <thead>
									<tr>
									  <th>Name</th>
									  <th>Email</th>
									  <th>Subject</th>
									  <th>Message</th>
								
									</tr>
								  </thead>
								  <tbody>
									<?php
                                if($data = $x->contact()){
                                foreach ($data as $key => $value) {
										echo "<tr>";
                                        echo "<td>{$value['name']}</td>";
                                        echo "<td style='font-size:15px'>";
                                       echo  "<span style='width:20px;'>";
                                        echo $value['email'];
                                        echo "</span>";
                                       echo "</td>";
                                        echo "<td>{$value['subject']}</td>";
                                        echo "<td>{$value['message']}</td>";
                                        
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