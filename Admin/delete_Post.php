<?php

include('classes/Class_vendor.php');

$x=new vendor();
$id=$_GET['id'];

$x->delete_post($id);


header("location:View_Post.php");   

  
?>