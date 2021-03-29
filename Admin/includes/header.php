<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header("location: Form.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
         <style>@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #101B33;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}
        .dropdown-content a{
            color:#fff;
            font-size:15px;
            text-decoration: none;
        }
        .dropdown-content a:hover{
            color:#fff;
            font-size:15px;
            text-decoration: none;
        }
.dropdown:hover .dropdown-content {
  display: block;
}






.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 28px;
    background-color: inherit
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s
}

.slider:before {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 4px;
    bottom: 4px;
    background-color: #2A4AC0;
    -webkit-transition: .4s;
    transition: .4s
}

input:checked+.slider {
    background-color: #2A4AC0;
}

input:focus+.slider {
    box-shadow: 0 0 1px #2196F3
}

input:checked+.slider:before {
    transform: translateX(30px);
    background-color: #fff
}

.slider.round {
    border-radius: 34px
}

.slider.round:before {
    border-radius: 50%
}

             
             
             
             
             
.slider2 {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s
}

.slider2:before {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 4px;
    bottom: 4px;
    background-color: #050A13;
    -webkit-transition: .4s;
    transition: .4s
}

input:checked+.slider2 {
    background-color: #000
}

input:focus+.slider2 {
    box-shadow: 0 0 1px #2196F3
}

input:checked+.slider2:before {
    transform: translateX(30px);
    background-color: #fff
}

.slider2.round {
    border-radius: 34px
}

.slider2.round:before {
    border-radius: 50%
}             
             
.dark-theme {
    background-color: #222
}
</style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    </head>
    <body>
<script>
function chBackcolor(color) {
   document.getElementById("Wrabber").style.background = color;
}
</script>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner" style="background:#2A4AC0" id="nava">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse" style="background:#2A4AC0" id="mm">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php" style="color:#fff">Admin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                       
                        
                        

                        <ul class="nav pull-right" id="vv">
                       
                            <li class="nav-user dropdown" style="background:#2A4AC0"id="z"><a href="#"  data-toggle="dropdown" style="background:#2A4AC0" id="nnnn">
 <?php echo "<span class='k'><img src='./images/{$_SESSION['admin_image']}' width='30' height='20'></span>";
?>
&nbsp;                            
<?php echo "<span style='color:#fff' class='k'>{$_SESSION['admin_name']}</span>";?>
                               </a>
                                         <div class="dropdown">
  <div class="dropdown-content" id="ra" style="background:#2A4AC0">
  <a href="UserDetails1.php"><p>My Profile</p></a>
      <a href="logout.php"><p>Logout</p></a>

  </div>
</div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper" style="background:#E7EBF1" id="Wrabber">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar" id="classss">
                            
                            <ul class="widget widget-menu unstyled" >
                              <li><a href="index.php" style="background:#2A4AC0;color:#fff;font-size:14px;font-weight:bold;" id="b1"><i class="menu-icon icon-bullhorn" style="color:#fff;" ></i>Dashboard</a>
                                </li>
                                <li><a href="Add_Admin.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b2"><i class="menu-icon icon-bullhorn" style="color:#fff;"></i>Manage Admin</a>
                                </li>
                               
                                
                                <li><a href="Block_Product.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b3"><i class="menu-icon icon-inbox" style="color:#fff;"></i>Products <b class="label green pull-right">
                                    </b> </a></li>
                                <li><a href="orders.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b4"><i class="menu-icon icon-tasks" style="color:#fff;" ></i>Orders <b class="label orange pull-right">
                                    </b> </a></li>
                            </ul>
                            
                                 <ul class="widget widget-menu unstyled" style="background:#101B33;">
                               
                                <li><a href="Add_Category.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b5"><i class="menu-icon icon-bullhorn" style="color:#fff;"></i>Manage Category</a>
                                </li>
                               
                               <li><a href="Request.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b6"><i class="menu-icon icon-bullhorn" style="color:#fff;border:1px solid grey"></i>Vendor join request</a>
                                </li>
                                     
                                  <li class="active"><a href="Block_Customer.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b7"><i class="menu-icon icon-dashboard" style="color:#fff;"></i>Block Customer</a>
                                </li>
                                <li><a href="Block_vendor.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b8"><i class="menu-icon icon-dashboard" style="color:#fff;"></i>Block Vendor</a>
                                </li>
                                <li><a href="Vendor_info.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b9" class="a"><i class="menu-icon icon-book" style="color:#fff;"></i>Vendor Info</a>
                                </li>
                               <li class="example"><a href="customer_info.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b10"><i class="menu-icon icon-book" style="color:#fff;"></i>Customer Info</a>
                                </li>
                                
                              <li class="example"><a href="Posts.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b11"><i class="menu-icon icon-book" style="color:#fff;"></i>Posts Request</a>
                                </li>
                                     
                                   <li class="example"><a href="View_Post.php" style="background:#2A4AC0;font-size:14px;font-weight:bold;color:#fff;letter-space:1px;" id="b12"><i class="menu-icon icon-book" style="color:#fff;"></i>Posts Info</a>
                                </li>
                                
                            </ul>
                            
                            
                            
                           
                            <!--/.widget-nav-->
                            
                            
                        
                            <!--/.widget-nav-->
                      
                        </div>
                        <!--/.sidebar-->
<br>
<span class="d-flex flex-column align-items-center" onclick="change2();" id="chan">
    <span class="h3 font-weight-bold text-white">Go Dark</span> <label class="switch"> <input type="checkbox"> <span class="slider2 round"></span> </label>
</span>
<span class="d-flex flex-column align-items-center" onclick="change();" id="chan">
    <span class="h3 font-weight-bold text-white">Go Light</span> <label class="switch"> <input type="checkbox"> <span class="slider round"></span> </label>
</span>

<script>
    var q1 = document.getElementById("q1");
    var q2 = document.getElementById("q2");
    var q3 = document.getElementById("q3");
    var next1 = document.getElementById('next1')
    var back1 = document.getElementById('back1')
    var next2 = document.getElementById('next2')
    var back2 = document.getElementById('back2')
    document.addEventListener('DOMContentLoaded', function() {
        let query = window.matchMedia("(max-width: 767px)");
        if (query.matches) {
            next1.onclick = function() {
                q1.style.left = "-650px";
                q2.style.left = "15px";
            }
            back1.onclick = function() {
                q1.style.left = "15px";
                q2.style.left = "650px";
            }
            back2.onclick = function() {
                q2.style.left = "15px";
                q3.style.left = "650px";
            }
            next2.onclick = function() {
                q2.style.left = "-650px";
                q3.style.left = "15px";
            }
        } else {
            next1.onclick = function() {
                q1.style.left = "-650px";
                q2.style.left = "50px";
            }
            back1.onclick = function() {
                q1.style.left = "50px";
                q2.style.left = "650px";
            }
            back2.onclick = function() {
                q2.style.left = "50px";
                q3.style.left = "650px";
            }
            next2.onclick = function() {
                q2.style.left = "-650px";
                q3.style.left = "50px";
            }
        }
    });

    function uncheck() {
        var rad = document.getElementById('rd')
        rad.removeAttribute('checked')
    }
    document.addEventListener('DOMContentLoaded', function() {
        const main = document.querySelector('body')
        const toggleSwitch = document.querySelector('.slider')
        toggleSwitch.addEventListener('click', () => {
            main.classList.toggle('dark-theme')
        })
    })
</script>
<script>
 function change(){
     document.getElementById("Wrabber").style.background="#E7EBF1";
     document.getElementById("nava").style.background="#2A4AC0";
     document.getElementById("nnnn").style.background="#2A4AC0";
     document.getElementById("b1").style.background="#2A4AC0";
     document.getElementById("b2").style.background="#2A4AC0";
     document.getElementById("b3").style.background="#2A4AC0";
     document.getElementById("b4").style.background="#2A4AC0";
     document.getElementById("b5").style.background="#2A4AC0";
     document.getElementById("b6").style.background="#2A4AC0";
     document.getElementById("b7").style.background="#2A4AC0";
     document.getElementById("b8").style.background="#2A4AC0";
     document.getElementById("b9").style.background="#2A4AC0";
     document.getElementById("b10").style.background="#2A4AC0";
     document.getElementById("z").style.background="#2A4AC0";
     document.getElementById("ra").style.background="#2A4AC0";
      document.getElementById("b11").style.background="#2A4AC0";
     document.getElementById("b12").style.background="#2A4AC0";
 }                       
</script>
        
      <script>                 
                        
     function change2(){
     document.getElementById("Wrabber").style.background="#050A13";
     document.getElementById("nava").style.background="#101B33";
     document.getElementById("nnnn").style.background="#101B33";
     document.getElementById("b1").style.background="#101B33";
     document.getElementById("b2").style.background="#101B33";
     document.getElementById("b3").style.background="#101B33";
     document.getElementById("b4").style.background="#101B33";
     document.getElementById("b5").style.background="#101B33";
     document.getElementById("b6").style.background="#101B33";
     document.getElementById("b7").style.background="#101B33";
     document.getElementById("b8").style.background="#101B33";
     document.getElementById("b9").style.background="#101B33";
     document.getElementById("b10").style.background="#101B33";
     document.getElementById("z").style.background="#101B33";
     document.getElementById("ra").style.background="#101B33";
     document.getElementById("b11").style.background="#101B33";
     document.getElementById("b12").style.background="#101B33";
 }   
     </script>                
                    
                    </div>
                    <!--/.span3-->
  <!--#050A13:body-->  
  <!--#101B33:Table-->  
  <!--#101B33:Menu  #7ED7F6 button-->