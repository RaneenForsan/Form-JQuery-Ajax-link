    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
       
    </head>

<?php
    session_start();
    include("classes/class_login.php");
    
    $x = new login();

    if(isset($_SESSION['email'])){
         header("location:index.php");
    }  

    if (isset($_POST['login'])) {
         $x->email      = $_POST['email'];
         $x->password   = $_POST['password'];

        $printer = $x->VerifyLogin();

        if ($printer){
            $_SESSION['email']         = $x->email;
            $_SESSION['password']      = $x->password;
            
            foreach($printer as $value){
                $_SESSION['admin_name']=$value['admin_name'];
                $_SESSION['admin_image']=$value['image'];
                $_SESSION['email']=$value['email'];
            }
            header("location:index.php");    
        }else{
            	 $error="<div class='alert alert-danger' role='alert'>
  This is a danger alert—check it out!
</div>";
        }
    }


?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
    

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
			  		Admin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
				
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form  method="post" action="" style="background:#101B33">
						<div class="module-head" style="background:#101B33">
							<h3 style="color:#fff;font-size:16px;">Log In</h3>
						</div>
                            <?php
                                        if (isset($error)) {
                                            echo"<div class='alert alert-danger' role='alert'>
                                                {$error}
                                            </div>
                                            ";
                                        }
                                    ?>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="email" id="inputEmail" placeholder="Email" name="email" style="background:#E8F0FE">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" placeholder="Password" name="password" style="background:#E8F0FE">
								</div>
							</div>
						</div>
						<div class="module-foot" style="background:#101B33">
							<div class="control-group">
								<div class="controls clearfix">
                                    <input type="submit" value="Login" name="login" class="btn btn-primary pull-right" style="background:#E8F0FE;color:#161622">

									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<center><b class="copyright"> &copy;copyright </b> All rights reserved by colorful edited by Raneen Forsan.
		</center></div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>