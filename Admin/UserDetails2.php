
<!DOCTYPE html>
<html>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.css">
</head>

<?php

include('includes/connect.php');

?>



<?php

include('includes/connect.php');

?>


<style>

body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263)
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: #465260; 
  color: black; 
  border: 2px solid #465260;
  font-style: italic;
  color: #DEDBD6;

}

.button2:hover {
  background-color: #465260;
  color: #DEDBD6;
}
    
</style>
<body>
<div class="span9">
<div class="content">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
                            <a href="Vendor_info.php"><br><br><img src="css/home.png" width="50" height="50"></a><br><br>

            <div class="col-xl-6 col-md-12">

                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile" style="background:#161622">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> 
                                    <?php

include('includes/connect.php');
$id=$_GET['id'];
$query  = "SELECT * FROM vendors where vendor_id=$id";                
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
 echo "<img src='../Vendor/images/{$row['image']}' width='200' height='200'>";
}?>
                                </div>
  <!-- Trigger the modal with a button -->
  <br><br><br><button type="button" class="button button2" id="btn" data-toggle="modal" data-target="#myModal" >Show Identity Card</button>

  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p><?php

$id=$_GET['id'];
$query  = "SELECT * FROM vendors where vendor_id=$id";                
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
 echo "<img src='../Vendor/images/{$row['image2']}' width='500' height='400'>";
}?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                            <p>                                  
                                    </p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?php

include('includes/connect.php');
$id=$_GET['id'];
$query  = "SELECT * FROM vendors where vendor_id=$id";                
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
 echo $row['vendor_email'];}
?></h6>
                                    </div>
                               
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Password</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-muted f-w-400"><?php

include('includes/connect.php');
$id=$_GET['id'];
$query  = "SELECT * FROM vendors where vendor_id=$id";                
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
 echo $row['vendor_password'];}
?></h6>
                                    </div>
                                  
                                </div>
                                         <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Manger of company</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-muted f-w-400"><?php

include('includes/connect.php');
$id=$_GET['id'];
$query  = "SELECT * FROM vendors where vendor_id=$id";                
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
 echo $row['manager_name'];}
?></h6>
                                    </div>
                                  
                                </div>
                                
                                       <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">category</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-muted f-w-400"><?php

include('includes/connect.php');
$id=$_GET['id'];
$query  = "SELECT * FROM vendors where vendor_id=$id";                
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
 echo "<span style='color:#F28D64;font-size:16px;'>{$row['category']}</span>";}
?></h6>
                                    </div>
                                  
                                </div>
                                          <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Mobile number</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="text-muted f-w-400"><?php

include('includes/connect.php');
$id=$_GET['id'];
$query  = "SELECT * FROM vendors where vendor_id=$id";                
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
 echo $row['vendor_mobile'];}
?></h6>
                                    </div>
                                  
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div></div>
</body>
</html>
