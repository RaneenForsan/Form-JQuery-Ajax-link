


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
								<h3 style="color:#273434;font-size:16px;">Orders</h3>
							</div>
							<div class="module-body">
								
								<table class="table">
								  <thead>
									<tr>
									  <th>Customer name</th>
									  <th>Vendor name</th>
									  <th>Product</th>
                                     <th>Qty</th>
									  <th>Image</th>
									  <th>Total</th>
									  <th>Block</th>
									</tr>
								  </thead>
								  <tbody>
									<?php
                                if($data = $x->Read_Orders()){
                                foreach ($data as $key => $value) {
										echo "<tr>";
                                        echo "<td>{$value['customer_name']}</td>";
                                        echo "<td style='font-size:15px'>";
                                       echo  "<span style='width:20px;'>";
                                        echo $value['vendor_name'];
                                        echo "</span>";
                                       echo "</td>";
                                        echo "<td>{$value['name']}</td>";
                                        echo "<td>{$value['qty']}</td>";
                                        echo "<td><img src='../Vendor/images/{$value['imageee']}' width='80' height='30'></td>";
                                        echo "<td>{$value['total']}</td>";
                                          echo "<td><a href='delete_Orders.php?id={$value['order_id']}'
                                        class='btn btn-danger'>Block</a></td>"; 
                                       
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