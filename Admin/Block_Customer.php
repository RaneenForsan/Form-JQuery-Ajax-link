


<?php include('classes/Class_vendor.php');
       
?>
<?php
$x=new vendor();

?>

	<?php include("includes/header.php");?>

<div class="span9">
					<div class="content">
                        <div class="module">
							<div class="module-head" style="background:#FFFFFF">
								<h3 style="color:#67172;font-size:16px;">Block Customer</h3>
							</div>
							<div class="module-body" style="background:#FFFFFF">
								
								<table class="table">
								  <thead>
									<tr>
									  <th>Name</th>
									  <th>Email</th>
									  <th>Mobile</th>
									  <th>Image</th>
									  <th>Block</th>
									</tr>
								  </thead>
								  <tbody>
									<?php
                                if($data = $x->Read_Request_customer()){
                                foreach ($data as $key => $value) {
										echo "<tr>";
                                        echo "<td>{$value['customer_name']}</td>";
                                        echo "<td style='font-size:15px'>";
                                       echo  "<span style='width:20px;'>";
                                        echo $value['customer_email'];
                                        echo "</span>";
                                       echo "</td>";
                                        echo "<td>{$value['customer_mobile']}</td>";
                                        echo "<td><img src='../Public/Login/images/{$value['image']}' width='80' height='30'></td>";
                                       echo "<td><a href='delete_Customer.php?id={$value['customer_id']}'
                                        class='btn btn-danger'>Block</a></td>"; 
										echo "</tr>";
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