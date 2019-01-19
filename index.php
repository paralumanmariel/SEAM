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
		<title>Southeast Asian Media Studies</title>

		<?php
			include('header.php');
		?>

    	<!-- Home Page Contents-->

    <div class="row" style="margin: 20px;">
    	<div class="col-md-1"></div>
    	<div class="col-md-7 bg-light">
    		<h1 style="font-size:60pt;">Welcome!</h1>
    		<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify;font-size: 14pt">
				The <i>Southeast Asian Media Studies</i>	 is the international, semi-annual, blind peer-reviewed, and open-access scholarly journal of the Southeast Asian Media Studies Association (SEAMSA), an academic community that aims to be at the forefront of Southeast Asian media studies and research.
				<br></br>
			</div>

			<div style="padding-left: 50px; padding-top: 100px">
						<h1 class="bar";></h1>
					</div>
					<div style="text-align:center;">
						<h2 style="margin:0px;">Announcements</h2>
					</div>
    	</div>

		<div class="col-md-3 bg-light">
			<div class=" align-middle">
			<button class="btn btn-primary loginbtn">
    		<?php
			if($user_home->is_logged_in()){
				echo '
			<a href="submission.php" class="logintxt">Make a Submission</a>';
			}else{
				echo '
			<a href="login.php" class="logintxt">Login to make a submission</a>';
			}
		?>
		</button>
			</center>
    	</div>
    	<div class="col-md-1">
    		
    	</div>
	</div>
	
	
	</body>
</html>