<?php
	include('classes/class_category.php');
	$x 		= new category();
	$x->id 	= $_GET['id'];
	$x->DeleteCategory();
	header('location:Add_Category.php');?>