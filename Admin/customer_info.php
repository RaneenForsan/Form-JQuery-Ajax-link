<?php include('classes/Class_vendor.php');

$x=new vendor();


?>


<?php 
include("includes/header.php");
 ?>
                <div class="span9">
                    <div class="content">
                        <?php 
                        $data=$x->Read_Request_customer();
                       
                       
        
  
                            echo "<div class='module' style='background:#FFFFFF'>";
                            echo "<div class='module-head' style='background:#FFFFFF'>";
                            echo  "<h3 style='color:#671727;font-size:16px;'>All Vendors </h3>";
                            echo "</div>";
                          
                            echo "<div class='module-body'>";
                                echo "<div class='row'>";
                            
                                    
                         if($data){
                            foreach($data as $value){
        echo  "<div class='media user' style='display:inline-block;margin-left:20px;'>";
 echo "<img src='../Public/Login/images/{$value['image']}' style='width:150px;height:150px;display:inline-block;'>";      
                       echo "<h3 class='media-title'>{$value['customer_name']}</h3>";
                                                
                                                echo "<p>";
                                        echo  "<small class='muted'>{$value['customer_email']}</small>";
                                echo "<br>";
                                echo  "<small class='muted'>{$value['customer_mobile']}</small>";
                                            echo "</p>";
                                                                        echo "</div>";

                                                                               }
}
   
                                    echo "</div>";
                                echo "</div>";
                                echo" <br/>";
                                echo "</div>";
                                echo "<br/>";
                          
 
?>
                        </div>
                    </div>

<?php 
echo "<center>";
include("includes/footer.php");
echo "</center>";

 ?>