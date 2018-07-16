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
		<title>Submission Guidelines</title>
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
	<div class="col-md-5" style="float: right">
		<p class="change_link"> 
			<a href="submission.php" style="color: #ffffff ">Make a Submission</a>
		</p>
	</div>
	
		<div class="col-md-8">
			<div id="columnbox" style="float:left; width:100%;">
				<div style="float:left; width:100%; padding:10px 20px 0px 100px;">
					<div style="text-align:center;">
						<h1 style="margin:0px;">Submission Guidelines</h1>
					</div>
					<div style="padding-left: 50px">
						<h1 class="bar";></h1>
					</div>
					<div style="text-align:center;">
						<h3 style="margin: 0px; padding:10px 0px 0px 0px">Manuscript Preparation</h3>
					</div>
					<div style="text-align:left;">
						<h4 style="margin: 0px; padding:10px 0px 0px 0px">Word Limit</h4>
					</div>
					<div id="clearbox" style="padding:5px; width:100%; float:left; color:#595959; text-align: justify">
						5,000 to 7,000 words excluding references, tables, notes, acknowledgements, and captions 
					</div>
					<br></br>
					<div style="text-align:left;">
						<h4 style="margin: 0px; padding:10px 0px 0px 0px">Style Guidelines</h4>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						Manuscripts should be submitted in Word (doc or docx) format.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<b><i>Cover Page: </i></b>The cover page contains the title and the names, affiliations, and bio-notes of the author/s of the article:
					</div>
					<div id="clearbox" style="padding:5px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Title: </u>Bold, Times New Roman, 20 pt., sentence case, double-spaced, center aligned
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Authorship and Affiliations: </u>Name of authors should be in Bold, Times New Roman, 12 pt, center aligned. The institutional affiliation of the authors should be placed beside their name and must be in Italics, Times New Roman, 12 pt., center aligned. Separate the names and their affiliations with a comma. [Example: Jane Doe, Chulalongkorn University]
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						<u>Author Bio-note: </u>Provide a short bio-note for each author. It is preferably less than 200 words. Place it after the references section. [Example: Jane Doe is an Associate Professor of Journalism from the Chulalongkorn University in Thailand. She has published …]; Times New Roman, 20 pt. sentence case, double-spaced, left-aligned
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						<b><i>Body: </i></b>The body of the manuscript contains the abstract, the whole article, and the list of references. Here are the guidelines for the body:
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						<u>Font: </u>Times New Roman, 12 pt, double-spaced. Use one-inch margins for all sides of the document.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Abstract: </u>The abstract should have 150 to 200 words. Indicate the abstract paragraph with a heading (Bold, Times New Roman, 12 pt.). Place at least eight keywords below.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Headings: </u>The font size for all headings should be 12 pt. To make the article readable, the use of fourth-level and more headings is discouraged.
					</div>
					<div id="clearbox" style="padding-right:50px; padding:0px 0px 0px 50px; width:100%; float:left; color:#595959;text-align: justify">
						<li>First-level headings should be in Bold, all uppercase, and left aligned</li>
						<li>Second-level headings should be in Bold Italics, title case, and left aligned</li>
						<li>Third-level headings should be in Italics, title case, and left aligned</li>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Tables, Figures, and other Supplementary Materials: </u>Provide indicators in the text where the table or figures should be placed. For example, you can insert this: [Figure 1 here]. Tables, figures, and other supplementary materials, including their captions, should be supplied in a separate Word file. For copyrighted materials, authors should acquire signed permission from the owners. All permissions should be supplied in a separate file.
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						<u>Spelling and punctuation: </u>This journal uses U.S. (i.e., American) English.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<u>Acknowledgement: </u>This is an optional section of a research article. It should be placed before the references. If possible, acknowledgement paragraphs should be limited to 250 words only.
						<br></br>
					</div>
					<div style="text-align:left;">
						<h4 style="margin: 0px; padding:10px 0px 0px 0px">References</h4>
					</div>
					<div id="clearbox" style="padding:5px; padding-right:50px;width:100%; float:left; color:#595959;text-align: justify">
						The manuscripts should adhere to the prescribed referencing format of the American Psychological Association (APA), 6th edition.
						<br></br>
					</div>
					<div style="text-align:center;">
						<h3 style="margin: 0px; padding:10px 0px 0px 0px">Submission of Manuscript</h3>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						Manuscripts submitted to the Southeast Asian Media Studies journal should not be previously published nor being considered for publication in another journal or any academic publication.
					</div>
					<br></br>
					<div style="padding-left: 300px;">
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
					<div style="padding-left:175px">
						<p class="change_link"> 
							<a href="submission.php" style="color: #ffffff ">Submit File</a>
						</p>
					</div>
					<br></br>
					<br></br>
					<br></br>
					<br></br>
				</div>
				</div>
			</div>

			<div id="section" style="float:left; width:100%;">
				<h5 style="margin:0px;"></h5>
			</div>
		</div>

		<!-- Scripts -->
		<script src="scripts/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  		<script src="scripts/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  		<script src="scripts/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>