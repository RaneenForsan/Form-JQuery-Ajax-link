
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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="./style.css">
	<style>
    
    #btn {
  background: #fff;
  padding: 5px;
  width: 150px;
  height: 35px;
  border: 1px solid #000;
  margin-top: 25px;
  cursor: pointer;
  transition: 0.3s;
  box-shadow: 0 50px #000 inset;
  color: #fff;
}
#btn:hover {
  box-shadow: 0 0 #000 inset;
  color: #000;
}
#btn:focus {
  outline: none;
}

        .form-group .form-control:focus, .form-group .form-control:valid {
       outline: none;
       box-shadow: 0 1px #000;
       border-color: #000;
}
.form-group .form-control:focus + .form-label, .form-group .form-control:valid + .form-label {
  font-size: 12px;
  color: #000;
  -webkit-transform: translateY(-15px);
  transform: translateY(-15px);
}
    </style>

</head>
<body style="background:#fff">
<!-- partial:index.partial.html -->
<div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1 style="color:#000">Admin Login</h1>
  <div class="form-group">
    <input required="required" class="form-control" name="email"/ type="email">
    <label class="form-label">Email    </label>
  </div>
  <div class="form-group">
    <input id="password" type="password" required="required" class="form-control"  name="password"/>
    <label class="form-label">Password</label>
    <p class="alert">Invalid Credentials..!!</p>
    <input type="submit" id="btn" style="margin-bottom: 10px;" value="Login" name="login"><br>
    
  </div>
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>