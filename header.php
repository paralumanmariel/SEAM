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
	    			<?php
	    				if(!$user_home->is_logged_in()){
							echo '<ul class="navbar-nav">
	  	    				<li class="nav-item">
	    					<a class="nav-link" href="login.php">Login</a>
			          	</li>
			          	<li class="nav-item">
	    					<a class="nav-link" href="signup.php">Register</a>
			          	</li>
	          		</ul>';
						}else{
							$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
						$stmt->execute(array(":uid"=>$_SESSION['userSession']));
						$row = $stmt->fetch(PDO::FETCH_ASSOC);
							echo '<ul class="navbar-nav">
	  	    				<li class="nav-item">
	    					<a class="nav-link" href="login.php">Welcome '.$row['userName'].'!</a>
			          	</li>
			          	<li class="nav-item">
	    					<a class="nav-link" href="logout.php">Logout</a>
			          	</li>
	          		</ul>';
						}

						
	    			?>
	    			
	       		</div>
	      	</div>
    	</nav>