<?php
session_start();
require_once 'class.user.php';

$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
	$reg_user->redirect('home.php');
}


if(isset($_POST['btn-signup']))
{
	$uname = trim($_POST['txtuname']);
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtpass']);
	$code = md5(uniqid(rand()));
	
	$stmt = $reg_user->runQuery("SELECT * FROM tbl_users WHERE userEmail=:email_id");
	$stmt->execute(array(":email_id"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if($stmt->rowCount() > 0)
	{
		$msg = "
		      <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong>  email allready exists , Please Try another one
			  </div>
			  ";
	}
	else
	{
		if($reg_user->register($uname,$email,$upass,$code))
		{			
			$id = $reg_user->lasdID();		
			$key = base64_encode($id);
			$id = $key;
			//need to update
			$message = "					
						Hello $uname,
						<br /><br />
						Welcome to Coding Cage!<br/>
						To complete your registration  please , just click following link<br/>
						<br /><br />
						<a href='http://localhost/SEAMS/verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
						<br /><br />
						Thanks,";
						
			$subject = "Confirm Registration";
						
			$reg_user->send_mail($email,$message,$subject);	
			$msg = "
					<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Success!</strong>  We've sent an email to $email.
                    Please click on the confirmation link in the email to create your account. 
			  		</div>
					";
		}
		else
		{
			echo "sorry , Query could no execute...";
		}		
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registration - Southeast Asian Media Studies</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="css/login.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script type="text/javascript">
  	var check = function() {
      document.getElementById('submitbtn').disable=true;
  if(document.getElementById('confirm_password').value=='' || document.getElementById('password').value==''){
    document.getElementById('message').innerHTML = '';
    document.getElementById('submitbtn').disable=true;
  }else if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password matched';
    document.getElementById('submitbtn').disable=false;
  }else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password not matching';
    document.getElementById('submitbtn').disable=true;
  }
}



  </script>

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
				<?php if(isset($msg)) echo $msg;  ?>
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        Full Name: <input type="text" class="input-block-level" placeholder="Last Name, First Name M.I." name="txtuname" required />
        Email: <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
        Password: <input type="password" class="input-block-level" placeholder="Password" name="txtpass" id="password"   onkeyup='check();' required />
        Confirm Password: <input type="password" id="confirm_password" class="input-block-level" placeholder="Confirm Password" name="txtpassconfirm"   onkeyup='check();' required />
        <span id='message'></span>
     	<hr />
        <button class="btn btn-large btn-primary" id="submitbtn" type="submit" name="btn-signup">Sign Up</button>
        <hr/>
         <div style="text-align: right;">Already a member?
        <a href="login.php" style="" class="btn btn-large">Login In</a></div>
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>