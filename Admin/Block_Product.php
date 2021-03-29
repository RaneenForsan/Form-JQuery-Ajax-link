

<?php include('classes/Class_vendor.php');
       
?>
<?php
$x=new vendor();

?>

	<?php include("includes/header.php");
?>
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

                  <div class="span9">
					<div class="content">
                        <div class="module" class="col-6">
							<div class="module-head" style="background:#FFFFFF">
								<h3 style="color:#671727;font-size:16px;">Vendor Requests</h3>
							</div>
							<div class="module-body" style="background:#FFFFFF">
								
								<table class="table" id="table">
								  <thead>
									<tr>
									  <th>Product</th>
									  <th>Price</th>
									  <th>Description</th>
									  <th>Image</th>
									  <th>Quantity</th>
									  <th>Category</th>
									  <th>Vendor</th>
									  <th>Block</th>
									</tr>
								  </thead>
								  <tbody>
									<?php
                                 if($data = $x->Read_Products()){
                                foreach ($data as $key => $value) {
										echo "<tr>";
                                        echo "<td>{$value['product_name']}</td>";
                                        echo "<td>{$value['product_price']}</td>";
                                        echo "<td>{$value['product_des']}</td>";
                                        echo "<td><img src='../Vendor/images/{$value['images']}' width='80' height='30'></td>";
                                         echo "<td>{$value['qty']}</td>";
                                         echo "<td>{$value['category_name']}</td>";
                                         echo "<td>{$value['vendor_name']}</td>";
                                       echo "<td><a href='delete_Product.php?id={$value['product_id']}'
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
