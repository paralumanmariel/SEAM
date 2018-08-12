<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
    $user_login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
    $email = trim($_POST['txtemail']);
    $upass = trim($_POST['txtupass']);
    
    if($user_login->login($email,$upass))
    {
        $user_login->redirect('index.php');
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Southeast Asian Media Studies Log-in</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="css/login.css" rel="stylesheet" media="screen">
    <link rel="icon" type="image/png" href="seamicon.ico">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <center>
                <div class="col-md-1">
                    <img class="img-fluid" src="seam.png">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="seamsalogo.png">
                </div>
                <h5></h5>
                <h4 style="color: #ffffff">The Official Scholarly Journal of the Southeast Asian Media Studies Association</h4>
            </center>
    <div class="container">
        <?php 
        if(isset($_GET['inactive']))
        {
            ?>
            <div class='alert alert-error'>
                <button class='close' data-dismiss='alert'>&times;</button>
                <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
            </div>
            <?php
        }
        ?>
        <form class="form-signin" method="post">
        <?php
        if(isset($_GET['error']))
        {
            ?>
            <div class='alert alert-success'>
                <button class='close' data-dismiss='alert'>&times;</button>
                <strong>Wrong Details!</strong> 
            </div>
            <?php
        }
        ?>
        <h2 class="form-signin-heading">Login</h2><hr />
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
        <input type="password" class="input-block-level" placeholder="Password" name="txtupass" required />
        <a href="fpass.php">Forgot Password?</a>
        <br/>
<button class="btn btn-large btn-primary" style="" type="submit" name="btn-login">Log in</button>
        <hr />
        <div style="text-align: right;">Not yet a member? <a href="signup.php" style="" class="btn btn-large">Signup</a></div>
      </form>

    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>