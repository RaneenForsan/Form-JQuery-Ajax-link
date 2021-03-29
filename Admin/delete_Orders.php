<?php

include('classes/Class_vendor.php');

$x=new vendor();
$id=$_GET['id'];

$x->delete_orders($id);


header("location:Orders.php");   

  
?>