<?php

include('classes/Class_vendor.php');

$x=new vendor();
$id=$_GET['id'];

$x->delete_product($id);


header("location:Block_Product.php");   

  
?>