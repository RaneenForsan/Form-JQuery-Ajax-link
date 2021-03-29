

<style>
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');


.success-msg {
  color: #270;
  background-color: #DFF2BF;
    padding:15px;
    margin-left:60px;
    font-size:20px;
}
    #btbt:hover{
        background: #007BFF;
    }
    
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #DFF2BF;
}
    .button2:hover {
  background-color: #DFF2BF;
  color: #000;
}

/* Just for CodePen styling - don't include if you copy paste */
html {
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
  font-weight: 300;
  margin: 25px;
}


</style>


<?php

include('includes/connect.php');
$id=$_GET['id'];
$query  = "SELECT * FROM vendor where vendor_id=$id";                
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){

echo "<br>"; 
$x=$row['vendor_name'];
$y=$row['manager_name'];
$u=$row['vendor_email'];
$z=$row['vendor_password'];
$v=$row['vendor_mobile'];
$i=$row['image'];
$l=$row['image2'];
$f=$row['category'];
}
$query="insert into vendors(vendor_name,manager_name,vendor_email,vendor_password,vendor_mobile,image,image2,
    category)
      values('$x','$y','$u','$z','$v','$i','$l','$f')";
       mysqli_query($con,$query);


$query="delete  from vendor where vendor_id=$id";
       mysqli_query($con,$query);
header("location:Request.php");

?>
<!--<div class="span9">
    <div class="content">
<div class="success-msg">
  <center><i class="fa fa-check"></i>
  You Accept Vendor Sussesfully.</center>
</div>

</div></div><br><br><br><br>

<center><a href="Request.php" ><button class="button button2">Back To Page</button></a></center>-->
