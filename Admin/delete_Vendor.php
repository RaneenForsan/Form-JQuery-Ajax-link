<?php

include('classes/Class_vendor.php');

$x=new vendor();
$id=$_GET['id'];

$x->delete_Vendor($id);


header("location:Block_vendor.php");   

  
?>