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
		<title>About Us</title>
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
						<h1 style="margin:0px;">About Us</h1>
					</div>
					<div style="text-align:left;">
						<h4 style="margin: 0px; padding:10px 0px 0px 0px">About the Journal</h4>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						The <b><i>Southeast Asian Media Studies</i></b> is the international, semi-annual, blind peer-reviewed, and open-access scholarly journal of the <b>Southeast Asian Media Studies Association (SEAMSA)</b>, an academic community that aims to be at the forefront of Southeast Asian media studies and research. The <b><i>Southeast Asian Media Studies</i></b> journal has a specific concentration on Southeast Asian media scholarship, perspectives, and frameworks. Research articles within the discipline of mass communication will be considered. Submissions may address any topic on Southeast Asian mass media, including, but not limited to:
					</div>
					<div id="clearbox" style="padding-right:50px; padding:0px 0px 0px 50px; width:100%; float:left; color:#595959;text-align: justify">
						<li>Anthropology of mass/new media</li>
						<li>Audience studies</li>
						<li>Broadcast communication</li>
						<li>Film</li>
						<li>Journalism</li>
						<li>Media and the environment</li>
						<li>Media criticism</li>
						<li>Media convergence</li>
						<li>Media education</li>
						<li>Media ethnography</li>
						<li>Media histories</li>
						<li>Media laws and ethics</li>
						<li>Media linguistics</li>
						<li>Media literacy</li>
						<li>Media business and management</li>
						<li>Media marketing</li>
						<li>Media practices</li>
						<li>Media programming</li>
						<li>Media representations</li>
						<li>Media technologies</li>
						<li>Media theory</li>
						<li>Online, social, digital, and new media</li>
						<li>Political economy of media</li>
						<li>Religion and spirituality and the mass/new media</li>
						<li>Sociology of mass/new media</li>
						<li>Space and spatiality in the mass/new media</li>
						<li>Transnational or diasporic media involving Southeast Asians</li>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						The <b><i>Southeast Asian Media Studies</i></b> welcomes manuscripts that are:
					</div>
					<div id="clearbox" style="padding-right:50px; padding:0px 0px 0px 50px; width:100%; float:left; color:#595959;text-align: justify">
						<li>Following either the social scientific, humanistic, or any other disciplinary approaches in research;</li>
						<li>Original and not duplications of previously published articles in other journals or in other forms of publication;</li>
						<li>Not being considered for publication by other journals, books, and the like; and</li>
						<li>Free from abusive, libelous, defamatory, fraudulent, illegal, or obscene content.</li>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<br></br>
					</div>
					<div style="text-align:left;">
						<h4 style="margin: 0px; padding:10px 0px 0px 0px">Peer Preview Process</h4>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						The <b><i>Southeast Asian Media Studies</i></b> journal adheres to the highest standards of peer-review.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<b>Step 1: Initial Review</b>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						The journal editor will conduct an initial review on your submitted article. During this stage, the article will be assessed according to its relevance and suitability to the journal and its aims and scope.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						If the article is accepted, it will be forwarded to two reviewers.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						The editor-in-chief could also issue a “provisional acceptance” of a submitted article. If this is the case, the editor-in-chief could ask the author to make some revisions and resubmit.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						If rejected, the editor-in-chief will inform the author with a detailed explanation.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<b>Step 2: “Double Blind” Peer Review</b>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						If the article is accepted, it will be forwarded to two reviewers.This journal follows a “double blind” peer review policy, which means that the article reviewers will not know the identity of the author/s and vice versa.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						If a submitted article is accepted after the initial review, it will be forwarded to two scholars, researchers, and/or experts who will be identified by the journal team.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						They will be checking the originality or “freshness” of the research, the suitability and appropriateness of the research framework, design, and methodology, the accuracy and clarity of results and interpretation, reliability of the conclusion, and the overall quality of the article.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						After reviewing, they will have to recommend the article for (1) acceptance with minimal to no revisions; (2) provisional acceptance; or (3) rejection.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<b>Step 3: Revision and Resubmission</b>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						All reviewers’ comments and suggestions will be given to the author of the article. He or she should revise the article according to all the comments and suggestions.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						An author could decide to not accept some or all the comments, provided that he or she would include a detailed explanation of why they are not applicable to his or her research.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						Upon receipt of the revised article, the editor-in-chief will evaluate it again. If the need arises, the article will again be forwarded to the reviewers for another round of reviews.
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						<b>Step 4: Acceptance</b>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						If there are no more issues on the paper, the author will be notified through e-mail that his or her article has been accepted for publication. The next step is the journal issue’s production stage.
						<br></br>
					</div>
					<div id="clearbox" style="padding:5px;padding-right:50px; width:100%; float:left; color:#595959;text-align: justify">
						There are <b>NO</b> submission or publication charges for this journal.
						<br></br>
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