<?php
	session_start();
	error_reporting(0);

	//Server Credentials
	$MyServerName = "localhost";
	$MyUserName = "root";
	$MyPassword = "";

	//Database
	$MyDBName = 'SEAMSA';

	$MyConnection = mysqli_connect($MyServer, $MyUserName, $MyPassword, $MyDBName);
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
		<title>Edit</title>
	</head>

	<!-- Body -->
	<body>
		<body>
		<!-- Header -->
		<div class="bg-secondary p-1">
			<center>
				<div class="col-md-2">
	    			<img class="img-fluid" src="seam.png">
	    		</div>
				<div class="col-md-5">
	    			<img class="img-fluid" src="seamsalogo.png">
	    		</div>
	    		<h5></h5>
	    		<h4 style="color: #ffffff">The Official Scholarly Journal of the Southeast Asian Media Studies Association</h4>
			</center>
	    </div>

	    <!-- Navigation Bar -->
	    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
	    	<div class="container">

	    		<!-- Logo -->
	    		<a class="navbar-brand" href="index.php" action="index.php">
	    			<b>Home</b>
	    		</a>
	    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    			<span class="navbar-toggler-icon"></span>
	    		</button>

	    		<a class="navbar-brand" href="index.php">
	    			<b>Archives</b>
	    		</a>
	    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    			<span class="navbar-toggler-icon"></span>
	    		</button>

	    		<a class="navbar-brand" href="aboutUs.php">
	    			<b>About Us</b>
	    		</a>
	    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    			<span class="navbar-toggler-icon"></span>
	    		</button>

	    		<a class="navbar-brand" href="submits.php">
	    			<b>View Submissions</b>
	    		</a>
	    		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    			<span class="navbar-toggler-icon"></span>
	    		</button>

	    		<!-- Links -->
	    		<div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
	    			<ul class="navbar-nav">
	  	    				<li class="nav-item">
	    					<a class="nav-link" href="login.php#tologin">Login</a>
			          	</li>
			          	<li class="nav-item">
	    					<a class="nav-link" href="login.php#toregister">Register</a>
			          	</li>
	          		</ul>
	       		</div>
	      	</div>
    	</nav>

    	<!-- Home Page Contents-->
    	<h4 class="text-center py-2">File Information</h4>
		<div class="container">
			<table class="table-hover table">
				<thead class="text-center">
					<tr>
						<th>Filename</th>
						<th>Current Status</th>
					</tr>
				</thead>
				<tr class="text-center">
					<td>Filename</td>
					<td>New Submission</td>
				</tr>
			</table>
		</div>
		<center><div><br></br><h1 class="bar";></h1></div></center>
		<h4 class="text-center py-2">Edit Changes</h4>
		<form class="form-signin py-3" name="myForm" method="POST" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
			<div class="container">
				<div class="form-group row">
					<div class="form-group col-xs-4 col-md-4 text-center">
						<label for="example-number-input" class="control-label">Status</label>
						<div class="col">
							<select name="status" class = "form-control">
								<option value="sentBack">Submission Sent Back to Author</option>
								<option value="inc">Incomplete Submission</option>
								<option value="waitApproval">Submission Waiting for Author's Approval</option>
								<option value="needRevision">Submission Needing Revision</option>
								<option value="revisionSent">Revisions Sent Back to Author</option>
								<option value="incRevised">Incomplete Submissions Being Revised</option>
								<option value="revisionApproval">Revisions Waiting for Author's Approval</option>
								<option value="processedRevision">Revisions Being Processed</option>
								<option value="declinedRevision">Declined Revisions</option>
								<option value="decidedSubmission">Submissions with a Decision</option>
							</select>
						</div>
					</div>
					<div class="form-group col-xs-4 col-md-4 text-center">
						<label for="date" class="control-label text-center">Re-upload File</label><br>
						<link rel="stylesheet" type="text/css" href="css/file-upload.css" />
										<script src="js/file-upload.js"></script>
										<script type="text/javascript">
										   	$(document).ready(function() {
									        $('.file-upload').file_upload();
										    });
										</script>
										<form class="form-horizontal">
						 				   <label class="file-upload btn"><input type="file" multiple></label>
										</form>
					</div>
					<div class="form-group col-xs-4 col-md-4 text-center">
						<label for="example-number-input" class="control-label text-center">Notify the Author</label>
						<div class="col">
							<select name="status" class = "form-control">
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group-row">
					<div class="form-group text-center">
						<label for="date" class="control-label text-center">Submission Remarks</label><br>
						<textarea class="form-control" id="exampleTextarea" rows="2" name="remarks" placeholder="Special Remarks for the Author"></textarea>
					</div>
				</div>
			</div>
			<div class="row py-2">
				<div class="col-md-12">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<center>
									<button class="btn" type="submit" name="save" value="save" id="button1" style="background-color: #C0C0C0; width: 150px; height: 60px; padding: 5px">
										<span>Save</span>
									</button>
								</center>
							</div>
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