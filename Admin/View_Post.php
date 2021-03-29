


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
									  <th>Title</th>
									  <th>Descr</th>
									  <th>Phone</th>
									  <th> name</th>
									  <th>Product</th>
									  <th>Block</th>
                                     
									</tr>
								  </thead>
								  <tbody>
									<?php
                                if($data = $x->Read_Postss()){
                                foreach ($data as $key => $value) {
										echo "<tr>";
                                        echo "<td>{$value['post_title']}</td>";
                                        echo "<td style='font-size:15px'>";
                                       echo  "<span style='width:20px;'>";
                                        echo $value['post_desc'];
                                        echo "</span>";
                                       echo "</td>";
                                        echo "<td>{$value['vendor_phone']}</td>";
                                        echo "<td>{$value['vendor_name']}</td>";
                                        echo "<td><img src='../Vendor/images/{$value['images']}' width='80' height='30'></td>";
                                       echo "<td><a href='delete_Post.php?id={$value['post_id']}'
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