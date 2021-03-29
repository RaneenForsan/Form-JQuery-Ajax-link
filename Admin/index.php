

<?php include"includes/header.php"?>
<?php include('classes/Admin_reports.php');
    $x = new Reports();

 ?>

<div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4" style="background:lightgrey;font-size:14px;"><i class=" icon-random"></i>
                                        <?php
                                                $printer = $x->ReadNumProduct();
                                                foreach ($printer as $key => $value) {
                                                   echo  "<b>{$value['num_product']}</b>";
                                                }
                                                ?>
                                        <p class="text-muted" style="color:#000">
                                            Products Number</p>
                                    </a><a href="#" class="btn-box big span4" style="background:#E8ECF8"><i class="icon-user"></i><b> <?php
                                                $printer = $x->ReadNumCustomer();
                                                foreach ($printer as $key => $value) {
                                                   echo  "<b>{$value['num_customer']}</b>";
                                                }
                                                ?></b>
                                        <p class="text-muted" style="color:#000">
                                            Customers Number</p>
                                    </a><a href="#" class="btn-box big span4" style="background:#E7F5EF"><i class="icon-money"></i><b> <?php
                                                $printer = $x->sales();
                                                foreach ($printer as $key => $value) {
                                                   echo  "<b>{$value['sum_total']}</b>";
                                                }
                                                ?></b>
                                           
                                        <p class="text-muted" style="color:#000">
                                            Sales</p>
                                    </a>
                                    
                                    
                                    
                                    
                                    
                                </div>
                                       <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4" style="background:#D8E1F7"><i class="icon-group"></i>
                                        <?php
                                                $printer = $x->Vendornumber();
                                                foreach ($printer as $key => $value) {
                                                   echo  "<b>{$value['vendor_number']}</b>";
                                                }
                                                ?>
                                        <p class="text-muted" style="color:#000">
                                            Vendor Number</p>
                                    </a><a href="#" class="btn-box big span4" style="background:#BBCAEE"><i class="icon-bullhorn"></i><b> <?php
                                                $printer = $x->ordernumber();
                                                foreach ($printer as $key => $value) {
                                                   echo  "<b>{$value['order_id']}</b>";
                                                }
                                                ?></b>
                                        <p class="text-muted" style="color:#000">
                                            Order Numbers</p>
                                    </a><a href="#" class="btn-box big span4" style="background:#fff;color:#000"><i class="icon-save"></i><b> <?php
                                                $printer = $x->categoriesnumber();
                                                foreach ($printer as $key => $value) {
                                                   echo  "<b>{$value['category_id']}</b>";
                                                }
                                                ?></b>
                                           
                                        <p class="text-muted" style="color:#000">
                                            Categories number</p>
                                    </a>
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="Messages.php" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                                </a><a href="Posts.php" class="btn-box small span4"><i class="icon-group"></i><b>Posts</b>
                                                </a><a href="Orders.php" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Orders</b>
                                                </a>
                                            </div>
                                        </div>
                                   
                                    </div>
                          
                                </div>
                            </div></div></div>


<?php 
    echo "<center>";
    include"includes/footer.php";
    echo "</center>";


?>