<?php
	session_start();
	require_once 'class.user.php';
	$user_home = new USER();
?>

<!DOCTYPE html>
<html>
	<!-- Head -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  		<link rel="icon" type="image/png" href="seamicon.ico">
		<title>Southeast Asian Media Studies</title>
	</head>

	<!-- Body -->
	<body>
		<body>
		<?php
			include('header.php');
		?>

    	<!-- Home Page Contents-->
	<div class="col-md-5" style="float: right">
		<?php
			if($user_home->is_logged_in()){
				echo '<p class="change_link"> 
			<a href="submission.php" style="color: #ffffff ">Make a Submission</a>
		</p>';
			}else{
				echo '<p class="change_link"> 
			<a href="login.php" style="color: #ffffff ">Login to make a submission</a>
		</p>';
			}
		?>
		<!-- <p class="change_link"> 
			<a href="submission.php" style="color: #ffffff ">Make a Submission</a>
		</p> -->
	</div>
	
		<div class="col-md-8">
			<div id="columnbox" style="float:left; width:100%;">
				<div style="float:left; width:100%; padding:10px 20px 0px 100px;">
					<div style="text-align:center;">
						<h1 style="margin:0px;">Welcome!</h1>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						The Southeast Asian Media Studies is the international, semi-annual, blind peer-reviewed, and open-access scholarly journal of the Southeast Asian Media Studies Association (SEAMSA), an academic community that aims to be at the forefront of Southeast Asian media studies and research.
						<br></br>
					</div>
					<div style="padding-left: 50px; padding-top: 100px">
						<h1 class="bar";></h1>
					</div>
					<div style="text-align:center;">
						<h2 style="margin:0px;">Announcements</h2>
					</div>
				</div>
			</div>
		</div>
			


			

		<!-- Scripts -->
		<script src="scripts/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  		<script src="scripts/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  		<script src="scripts/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>