<?php

include('classes/Class_vendor.php');

$x=new vendor();
$id=$_GET['id'];

$x->delete_Customer($id);


header("location:Block_Customer.php");   

  
?>