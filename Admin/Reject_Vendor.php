<?php

include('classes/Class_vendor.php');

$x=new vendor();
$id=$_GET['id'];

$x->delete_Vendors($id);


header("location:Request.php");   

  
?>